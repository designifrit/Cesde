package com.example.appregistro;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;

public class SaludoActivity extends AppCompatActivity {

    TextView tvUsuario;
    Button btRegresar;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_saludo);

//      getSupportActionBar().hide();
        tvUsuario = findViewById(R.id.tvUsuario);
        btRegresar = findViewById(R.id.btRegresar);

        String usuario;
        usuario = getIntent().getStringExtra("datos");
        tvUsuario .setText(usuario);
    }

    public void Regresar(View view){
        Intent intRegresar = new Intent(this, MainActivity.class);
        startActivity(intRegresar);
    }
}