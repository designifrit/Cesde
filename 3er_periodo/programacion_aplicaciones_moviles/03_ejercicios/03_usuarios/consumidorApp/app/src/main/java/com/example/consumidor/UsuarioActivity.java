package com.example.consumidor;

import android.content.Intent;
import android.os.Bundle;
import androidx.appcompat.app.AppCompatActivity;
import android.view.View;
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
import java.util.Objects;

public class UsuarioActivity extends AppCompatActivity implements Response.ErrorListener, Response.Listener<JSONObject> {

    EditText etuser,etNombre,etCorreo,etClave;
    Button btRegistrar,btRegresar, btConsultar, btEliminar, btLimpiar;
    RequestQueue rQueue;
    JsonRequest<JSONObject> jRequest;
    int sw = 0;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_usuario);

        Objects.requireNonNull(getSupportActionBar()).hide();
        etuser = findViewById(R.id.etUser);
        etNombre = findViewById(R.id.etNombre);
        etCorreo = findViewById(R.id.etCorreo);
        etClave = findViewById(R.id.etClave);
        btRegistrar = findViewById(R.id.btnGuardar);
        btRegresar = findViewById(R.id.btnRegresar);
        btConsultar = findViewById(R.id.btnConsultar);
        btLimpiar = findViewById(R.id.btnLimpiar);
        btEliminar = findViewById(R.id.btnEliminar);

        rQueue = Volley.newRequestQueue(this);  // Solicitar la conexion a internet

        btRegistrar.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                guardar_usuario();
            }
        });

        btConsultar.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                consultar_usuario();
            }
        });

        btEliminar.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                eliminar_usuario();
            }
        });

        btRegresar.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                regresar();
            }
        });

        btLimpiar.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                limpiar();
            }
        });
    }

    private void guardar_usuario() {
        String url = "", usuario, nombre, correo, clave;
        usuario = etuser.getText().toString();
        nombre = etNombre.getText().toString();
        correo = etCorreo.getText().toString();
        clave = etClave.getText().toString();

        if(usuario.isEmpty() || nombre.isEmpty() || correo.isEmpty() || clave.isEmpty()){
            Toast.makeText(this, "Todos los campos son requeridos", Toast.LENGTH_SHORT).show();
        }else{
            if(sw == 0){
                url = "http://192.168.1.6:8080/Cesde/3er_periodo/programacion_aplicaciones_moviles/03_ejercicios/03_usuarios/web_service/registrocorreo.php";
            }else if(sw == 1){
                url = "http://192.168.1.6:8080/Cesde/3er_periodo/programacion_aplicaciones_moviles/03_ejercicios/03_usuarios/web_service/actualiza.php";
                sw = 0;
                StringRequest postRequest = new StringRequest(Request.Method.POST, url,
                        new Response.Listener<String>()
                        {
                            @Override
                            public void onResponse(String response) {
                                etClave.setText("");
                                etCorreo.setText("");
                                etNombre.setText("");
                                etuser.setText("");
                                etuser.requestFocus();
                                Toast.makeText(getApplicationContext(), "Registro de usuario realizado correctamente!", Toast.LENGTH_LONG).show();
                            }
                        },
                        new Response.ErrorListener()
                        {
                            @Override
                            public void onErrorResponse(VolleyError error) {
                                Toast.makeText(getApplicationContext(), "Registro de usuario incorrecto!", Toast.LENGTH_LONG).show();
                            }
                        }
                ) {
                    @Override
                    protected Map<String, String> getParams()
                    {
                        Map<String, String> params = new HashMap<String, String>();
                        params.put("usr",etuser.getText().toString().trim());
                        params.put("nombre", etNombre.getText().toString().trim());
                        params.put("correo",etCorreo.getText().toString().trim());
                        params.put("clave",etClave.getText().toString().trim());
                        return params;
                    }
                };
                RequestQueue requestQueue = Volley.newRequestQueue(this);
                requestQueue.add(postRequest);
            }
        }
    }

    public void consultar_usuario(){
        String url = "http://192.168.1.6:8080/Cesde/3er_periodo/programacion_aplicaciones_moviles/03_ejercicios/03_usuarios/web_service/consulta.php?usr=" + etuser.getText().toString();
        jRequest = new JsonObjectRequest(Request.Method.GET,url,null,this,this);
        rQueue.add(jRequest);
    }

        @Override
        public void onErrorResponse(VolleyError error) {
            Toast.makeText(this, "No se ha encontrado el usuario "+ etuser.getText().toString(), Toast.LENGTH_SHORT).show();
            sw = 0;
        }

        @Override
        public void onResponse(JSONObject response) {
            Toast.makeText(this, "Usuario consultado " + etuser.getText().toString(), Toast.LENGTH_SHORT).show();

            //datos: arreglo que envia los datos en formato JSON, en el archivo php
            JSONArray jsonArray = response.optJSONArray("datos");
            JSONObject jsonObject = null;

            try {
                jsonObject = jsonArray.getJSONObject(0);//posicion 0 del arreglo....

                etNombre.setText(jsonObject.optString("nombre"));
                etCorreo.setText(jsonObject.optString("correo"));
                etClave.setText(jsonObject.optString("clave"));
                etNombre.requestFocus();
                sw = 1;
            }
            catch (JSONException e)
            {
                e.printStackTrace();
            }
        }

    public void eliminar_usuario(){
        if(sw == 0){
            Toast.makeText(this, "Consultar primero el usuario a eliminar", Toast.LENGTH_SHORT).show();
            etuser.requestFocus();
        }else{
            String url = "http://192.168.1.6:8080/Cesde/3er_periodo/programacion_aplicaciones_moviles/03_ejercicios/03_usuarios/web_service/elimina.php";

            StringRequest postRequest = new StringRequest(Request.Method.POST, url,
                new Response.Listener<String>()
                {
                    @Override
                    public void onResponse(String response) {
                        etClave.setText("");
                        etCorreo.setText("");
                        etNombre.setText("");
                        etuser.setText("");
                        etuser.requestFocus();
                        Toast.makeText(getApplicationContext(), "Registro eliminado correctamente!", Toast.LENGTH_LONG).show();
                    }
                },
                new Response.ErrorListener()
                {
                    @Override
                    public void onErrorResponse(VolleyError error) {
                        Toast.makeText(getApplicationContext(), "Registro no se pudo eliminar!", Toast.LENGTH_LONG).show();
                    }
                }
            ) {
                @Override
                protected Map<String, String> getParams()
                {
                    Map<String, String> params = new HashMap<String, String>();
                    params.put("usr",etuser.getText().toString().trim());
                    return params;
                }
            };
            RequestQueue requestQueue = Volley.newRequestQueue(this);
            requestQueue.add(postRequest);
            sw = 0;
        }
    }

    public void regresar()
    {
        //Limpiar datos de la actividad que se invoca
        Intent i1=new Intent(getApplicationContext(),MainActivity.class);
        i1.setAction(Intent.ACTION_MAIN);
        i1.addCategory(Intent.CATEGORY_HOME);
        i1.setFlags(Intent.FLAG_ACTIVITY_CLEAR_TOP);
        i1.setFlags(Intent.FLAG_ACTIVITY_CLEAR_TASK);
        i1.setFlags(Intent.FLAG_ACTIVITY_NEW_TASK | Intent.FLAG_ACTIVITY_CLEAR_TASK);
        startActivity(i1);
        finish();
    }

    public void limpiar(){
        etuser.setText("");
        etNombre.setText("");
        etCorreo.setText("");
        etClave.setText("");

        etuser.requestFocus();
    }
}