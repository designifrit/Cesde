package com.example.productostoreapp;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.JsonObjectRequest;
import com.android.volley.toolbox.JsonRequest;
import com.android.volley.toolbox.StringRequest;
import com.android.volley.toolbox.Volley;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.util.HashMap;
import java.util.Map;

public class RegistrarActivity extends AppCompatActivity implements Response.ErrorListener, Response.Listener<JSONObject>{

    EditText etProducto, etDescripcion, etExistencias, etValor;
    Button btGuardar, btConsultar, btEliminar, btLimpiar, btRegresar;

    RequestQueue rQueue;
    JsonRequest<JSONObject> jRequest;

    int sw = 0;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_registrar);

        etProducto = findViewById(R.id.etProducto);
        etDescripcion = findViewById(R.id.etDescripcion);
        etExistencias = findViewById(R.id.etExistencias);
        etValor = findViewById(R.id.etValor);
        btGuardar = findViewById(R.id.btGuardar);
        btConsultar = findViewById(R.id.btConsultar);
        btEliminar = findViewById(R.id.btEliminar);
        btLimpiar = findViewById(R.id.btLimpiar);
        btRegresar = findViewById(R.id.btRegresar);

        rQueue = Volley.newRequestQueue(this);  // Solicitar la conexion a internet

        btGuardar.setOnClickListener(v -> guardar());
        btConsultar.setOnClickListener(v -> consultar());
        btEliminar.setOnClickListener(v -> eliminar());
        btLimpiar.setOnClickListener(v -> limpiar());
        btRegresar.setOnClickListener(v -> regresar());
    }

    private void guardar() {
        String url, producto, descripcion, existencias, valor;

        producto = etProducto.getText().toString();
        descripcion = etDescripcion.getText().toString();
        existencias = etExistencias.getText().toString();
        valor = etValor.getText().toString();

        if(producto.isEmpty() || descripcion.isEmpty() || existencias.isEmpty() || valor.isEmpty()){
            Toast.makeText(this, "Todos los campos son requeridos", Toast.LENGTH_SHORT).show();
        }else{
            if(sw == 0){
                url = "http://192.168.1.6:8080/Cesde/3er_periodo/programacion_aplicaciones_moviles/02_actividades/02_product_store/web_service/crea.php";
            }else if(sw == 1){
                url = "http://192.168.1.6:8080/Cesde/3er_periodo/programacion_aplicaciones_moviles/02_actividades/02_product_store/web_service/actualiza.php";
                sw = 0;
                StringRequest postRequest = new StringRequest(Request.Method.POST, url,
                        response -> {
                            etProducto.setText("");
                            etDescripcion.setText("");
                            etExistencias.setText("");
                            etValor.setText("");
                            etProducto.requestFocus();
                            Toast.makeText(getApplicationContext(), "Registro del producto realizado correctamente!", Toast.LENGTH_LONG).show();
                        },
                        error -> Toast.makeText(getApplicationContext(), "Registro del producto incorrecto!", Toast.LENGTH_LONG).show()
                ) {
                    @Override
                    protected Map<String, String> getParams()
                    {

                        Map<String, String> params = new HashMap<>();
                        params.put("producto",etProducto.getText().toString().trim());
                        params.put("descripcion", etDescripcion.getText().toString().trim());
                        params.put("existencias",etExistencias.getText().toString().trim());
                        params.put("valor",etValor.getText().toString().trim());
                        return params;
                    }
                };
                RequestQueue requestQueue = Volley.newRequestQueue(this);
                requestQueue.add(postRequest);
            }
        }
    }

    public void consultar(){
        String url = "http://192.168.1.6:8080/Cesde/3er_periodo/programacion_aplicaciones_moviles/02_actividades/02_product_store/web_service/consulta.php?producto=" + etProducto.getText().toString();
        jRequest = new JsonObjectRequest(Request.Method.GET,url,null,this,this);
        rQueue.add(jRequest);
    }
        @Override
        public void onErrorResponse(VolleyError error) {
            Toast.makeText(this, "No se ha encontrado el producto", Toast.LENGTH_SHORT).show();
            sw = 0;
        }

        @Override
        public void onResponse(JSONObject response) {
            Toast.makeText(this, "Ingreso exitoso", Toast.LENGTH_SHORT).show();

            // datos_producto: arreglo que envia los datos en formato JSON, en el archivo php
            JSONArray jsonArray = response.optJSONArray("datos_producto");
            JSONObject jsonObject;

            try {
                // Assert jsonArray != null;
                assert jsonArray != null;
                jsonObject = jsonArray.getJSONObject(0);    //posicion 0 del arreglo....

                // Trae los objetos en un Json para poder mostrarlos en la vista
                etDescripcion.setText(jsonObject.getString("descripcion"));
                etExistencias.setText(jsonObject.getString("existencias"));
                etValor.setText(jsonObject.getString("valor"));

                sw = 1;
            }
            catch (JSONException e)
            {
                e.printStackTrace();
            }
        }

    public void eliminar(){
        String producto, descripcion, existencias, valor;
        producto = etProducto.getText().toString();
        descripcion = etDescripcion.getText().toString();
        existencias = etExistencias.getText().toString();
        valor = etValor.getText().toString();

        if(sw == 0 || producto.isEmpty() || descripcion.isEmpty() || existencias.isEmpty() || valor.isEmpty()){
            Toast.makeText(this, "Consulta primero el producto", Toast.LENGTH_SHORT).show();
            etProducto.requestFocus();
        }else{
            String url = "http://192.168.1.6:8080/Cesde/3er_periodo/programacion_aplicaciones_moviles/02_actividades/02_product_store/web_service/elimina.php";

            StringRequest postRequest = new StringRequest(Request.Method.POST, url,
                    response -> {
                        etProducto.setText("");
                        etDescripcion.setText("");
                        etExistencias.setText("");
                        etValor.setText("");
                        etProducto.requestFocus();
                        Toast.makeText(getApplicationContext(), "Producto eliminado correctamente!", Toast.LENGTH_LONG).show();
                    },
                    error -> Toast.makeText(getApplicationContext(), "El producto no se pudo eliminar!", Toast.LENGTH_LONG).show()
            ) {
                @Override
                protected Map<String, String> getParams()
                {
                    Map<String, String> params = new HashMap<>();
                    params.put("producto",etProducto.getText().toString().trim());
                    return params;
                }
            };
            RequestQueue requestQueue = Volley.newRequestQueue(this);
            requestQueue.add(postRequest);
            sw = 0;
        }
    }

    public void limpiar(){
        etProducto.setText("");
        etDescripcion.setText("");
        etExistencias.setText("");
        etValor.setText("");
        etProducto.requestFocus();
        sw = 0;
    }

    public void regresar(){
        Intent IntRegresar = new Intent(getBaseContext(), MainActivity.class);
        startActivity(IntRegresar);
    }
}