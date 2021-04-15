package com.example.viaje;

import android.content.Intent;
import android.support.v7.app.ActionBar;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;

public class MainActivity extends AppCompatActivity {

    EditText etCodigo;
    Button btGuardar, btRegistrar;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        getSupportActionBar().hide();
        etCodigo = findViewById(R.id.etCodigo);
        btGuardar = findViewById(R.id.btGuardar);
        btRegistrar = findViewById(R.id.btRegistrar);
    }

    public void registrar(View view){
        Intent intRegresar = new Intent(this, RegistrarActivity.class);
        startActivity(intRegresar);
    }
}