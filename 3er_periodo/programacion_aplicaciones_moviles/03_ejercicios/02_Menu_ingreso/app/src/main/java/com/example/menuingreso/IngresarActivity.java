package com.example.menuingreso;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class IngresarActivity extends AppCompatActivity {

    Button btRegresar;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_ingresar);

        getSupportActionBar().hide();
        btRegresar = findViewById(R.id.btRegresar);
    }

    public void regresar(View view){
        Intent intRegresar = new Intent(this, MainActivity.class);
        startActivity(intRegresar);
    }
}