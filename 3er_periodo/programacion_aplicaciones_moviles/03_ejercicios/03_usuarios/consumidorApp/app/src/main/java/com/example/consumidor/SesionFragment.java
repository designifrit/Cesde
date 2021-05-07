package com.example.consumidor;

import android.os.Bundle;
import android.support.v4.app.Fragment;
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

import org.json.JSONObject;

import java.util.Objects;

import org.json.JSONObject;

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
        String url = "http://192.168.1.3:8080/Cesde/3er_periodo/programacion_aplicaciones_moviles/03_ejercicios/03_usuarios/web_service/sesion.php?correo=" + etCorreo.getText().toString() + "&clave=" + etClave.getText().toString();
        jRequest = new JsonObjectRequest(Request.Method.GET,url,null,this,this);
        rQueue.add(jRequest);
    }

    @Override
    public void onErrorResponse(VolleyError error) {
        Toast.makeText(getContext(), "No se ha encontrado el correo", Toast.LENGTH_SHORT).show();
    }

    @Override
    public void onResponse(JSONObject respaonse) {
        Toast.makeText(getContext(), "Ingreso exitoso", Toast.LENGTH_SHORT).show();
    }
}