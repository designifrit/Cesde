package com.example.consumidor;

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

    EditText etCorreo, etClave;
    Button btIngresar;
    TextView tvRegistrar;

    // Para poder hacer la petición y enviar los datos a través de un json
    RequestQueue rQueue;
    JsonRequest<JSONObject> jRequest;

    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container, Bundle savedInstanceState) {

        // Se debe incluir el View para poder ubicr los objetos en fragment_sesion, debido a que no estamos trabajando en una actividad sino una vista
        View vista = inflater.inflate(R.layout.fragment_sesion,container,false);
        etCorreo = vista.findViewById(R.id.etCorreo);
        etClave = vista.findViewById(R.id.etClave);
        btIngresar = vista.findViewById(R.id.btIngresar);
        tvRegistrar = vista.findViewById(R.id.tvRegistrar);
        rQueue = Volley.newRequestQueue(Objects.requireNonNull(getContext()));  // Solicitar la conexion a internet

        // Evento onClick
        btIngresar.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                iniciar_sesion();
            }
        });
        return vista;
    }

    public void iniciar_sesion()
    {
        //  http://192.168.1.3:8080/Cesde/3er_periodo/programacion_aplicaciones_moviles/03_ejercicios/03_usuarios/web_service/sesion.php?correo=fmc@gmail.com&clave=123
        String url = "http://192.168.1.6:8080/Cesde/3er_periodo/programacion_aplicaciones_moviles/03_ejercicios/03_usuarios/web_service/sesion.php?correo=" + etCorreo.getText().toString() + "&clave=" + etClave.getText().toString();
        jRequest = new JsonObjectRequest(Request.Method.GET,url,null,this,this);
        rQueue.add(jRequest);
    }

    @Override
    public void onErrorResponse(VolleyError error) {
        Toast.makeText(getContext(), "No se ha encontrado el correo", Toast.LENGTH_SHORT).show();
    }

    @Override
    public void onResponse(JSONObject response) {
        Toast.makeText(getContext(), "Ingreso exitoso", Toast.LENGTH_SHORT).show();
        Clsusuario usuario = new Clsusuario();

        //datos: arreglo que envia los datos en formato JSON, en el archivo php
        JSONArray jsonArray = response.optJSONArray("datos");
        JSONObject jsonObject = null;

        try {
            jsonObject = jsonArray.getJSONObject(0);//posicion 0 del arreglo....
            usuario.setUsr(jsonObject.optString("usr"));
            usuario.setNombre(jsonObject.optString("nombre"));
            usuario.setCorreo(jsonObject.optString("correo"));
            usuario.setClave(jsonObject.optString("clave"));
        }
        catch (JSONException e)
        {
            e.printStackTrace();
        }

        //Intent misesion = new Intent(getContext(),UsuarioActivity.class);
        //misesion.putExtra("musr",usr.getText().toString());
        //startActivity(misesion);
        Intent IntDatos = new Intent(getContext(),UsuarioActivity.class);
        //IntDatos.putExtra(UsuarioActivity.nombre,usuario.getNombre());
        startActivity(IntDatos);
    }
}