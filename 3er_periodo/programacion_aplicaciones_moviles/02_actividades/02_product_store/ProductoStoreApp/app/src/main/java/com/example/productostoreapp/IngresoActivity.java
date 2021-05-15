package com.example.productostoreapp;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.widget.Button;
import android.widget.EditText;

import org.json.JSONException;
import org.json.JSONObject;

public class IngresoActivity extends AppCompatActivity {

    EditText etProducto, etDescripcion, etExistencias, etValor;
    Button btRegresar;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_ingreso);

        etProducto = findViewById(R.id.etProducto);
        etDescripcion = findViewById(R.id.etDescripcion);
        etExistencias = findViewById(R.id.etExistencias);
        etValor = findViewById(R.id.etValor);
        btRegresar = findViewById(R.id.btRegresar);

        try {
            // Trae el objeto Json desde SesionFragment con Intent.putExtra
            JSONObject objeto = new JSONObject(getIntent().getStringExtra("datos"));

            // Establece en los EditText la info. traida desde el objeto
            etProducto.setText(objeto.getString("producto"));
            etDescripcion.setText(objeto.getString("descripcion"));
            etExistencias.setText(objeto.getString("existencias"));
            etValor.setText(objeto.getString("valor"));
        } catch (JSONException e) {
            e.printStackTrace();
        }

        btRegresar.setOnClickListener(v -> regresar());
    }

    public void regresar(){
        Intent IntRegresar = new Intent(getBaseContext(), MainActivity.class);
        startActivity(IntRegresar);
    }
}