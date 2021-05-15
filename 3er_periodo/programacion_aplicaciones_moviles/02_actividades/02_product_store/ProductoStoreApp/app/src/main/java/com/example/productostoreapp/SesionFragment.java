package com.example.productostoreapp;

import android.content.Intent;
import android.os.Bundle;
import androidx.fragment.app.Fragment;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;

import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.JsonObjectRequest;
import com.android.volley.toolbox.JsonRequest;
import com.android.volley.toolbox.Volley;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.util.Objects;

public class SesionFragment extends Fragment implements Response.Listener<JSONObject>,Response.ErrorListener{

    EditText etIngresar;
    Button btIngresar;
    TextView tvRegistrar;

    // Para pasar los valores del objeto
    String producto, descripcion;
    int existencias, valor;

    // Para poder hacer la petición y enviar los datos a través de un json
    RequestQueue rQueue;
    JsonRequest<JSONObject> jRequest;

    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container, Bundle savedInstanceState) {

        // Se debe incluir el View para poder ubicr los objetos en fragment_sesion, debido a que no estamos trabajando en una actividad sino una vista
        View vista = inflater.inflate(R.layout.fragment_sesion, container, false);

        etIngresar = vista.findViewById(R.id.etIngresar);
        btIngresar = vista.findViewById(R.id.btIngresar);
        tvRegistrar = vista.findViewById(R.id.tvRegistrar);

        rQueue = Volley.newRequestQueue(Objects.requireNonNull(getContext()));  // Solicitar la conexion a internet

        btIngresar.setOnClickListener(v -> ingresar());
        tvRegistrar.setOnClickListener(v -> registrar());

        return vista;
    }

    public void ingresar() {
        String producto;

        producto = etIngresar.getText().toString();

        if(producto.isEmpty()){
            Toast.makeText(getContext(), "Ingresa el nombre del producto", Toast.LENGTH_SHORT).show();
        }else{
            String url = "http://192.168.1.6:8080/Cesde/3er_periodo/programacion_aplicaciones_moviles/02_actividades/02_product_store/web_service/sesion.php?producto=" + etIngresar.getText().toString();
            jRequest = new JsonObjectRequest(Request.Method.GET,url,null,this,this);
            rQueue.add(jRequest);
        }
    }

        @Override
        public void onErrorResponse(VolleyError error) {
            Toast.makeText(getContext(), "No se ha encontrado el producto", Toast.LENGTH_SHORT).show();
        }

        @Override
        public void onResponse(JSONObject response) {
            Toast.makeText(getContext(), "Ingreso exitoso", Toast.LENGTH_SHORT).show();

            ClsProducto productos = new ClsProducto(producto, descripcion, existencias, valor);

            // datos_producto: arreglo que envia los datos en formato JSON, en el archivo php
            JSONArray jsonArray = response.optJSONArray("datos_producto");
            JSONObject jsonObject = null;

            try {
                // Assert jsonArray != null;
                assert jsonArray != null;
                jsonObject = jsonArray.getJSONObject(0);    //posicion 0 del arreglo....

                // Trae los objetos en un Json para poder mostrarlos en la vista
                productos.setProducto(jsonObject.optString("producto"));
                productos.setDescripcion(jsonObject.optString("descripcion"));
                productos.setExistencias(jsonObject.getInt("existencias"));
                productos.setValor(jsonObject.getInt("valor"));
            }
            catch (JSONException e)
            {
                e.printStackTrace();
            }

            Intent IntIngreso = new Intent(getContext(), IngresoActivity.class);

            assert jsonObject != null;
            IntIngreso.putExtra("datos", jsonObject.toString());  // Pasar jsonObject como String a IngresoActivity

            startActivity(IntIngreso);
        }

    public  void registrar(){
        Intent IntRegistrar = new Intent(getContext(),RegistrarActivity.class);
        startActivity(IntRegistrar);
    }
}