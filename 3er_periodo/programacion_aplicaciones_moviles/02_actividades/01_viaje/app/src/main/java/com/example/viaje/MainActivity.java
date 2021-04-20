package com.example.viaje;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import java.util.ArrayList;

public class MainActivity extends AppCompatActivity {

    EditText etCodigo;
    Button btGuardar, btRegistrar;

    int posicion;
    ClsViaje objetoViaje;
    ArrayList<ClsViaje> arrayListViaje;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        getSupportActionBar().hide();
        etCodigo = findViewById(R.id.etCodigo);
        btGuardar = findViewById(R.id.btGuardar);
        btRegistrar = findViewById(R.id.btRegistrar);

        arrayListViaje = (ArrayList<ClsViaje>) getIntent().getSerializableExtra("lista");
    }

    public void guardar(View view){
        String codigo;
        codigo = etCodigo.getText().toString();


        if(codigo.isEmpty()){
            Toast.makeText(this, "ingresa el código del viaje", Toast.LENGTH_SHORT).show();
            etCodigo.requestFocus();
        }else{

            if(getIntent().getSerializableExtra("lista").toString() == null){
                Toast.makeText(this, "Primero debes registrar un viaje", Toast.LENGTH_SHORT).show();
            }
            else{
                int sw = 0;
                posicion = 0;

                while(posicion < arrayListViaje.size() && sw == 0){
                    objetoViaje = arrayListViaje.get(posicion);

                    if(codigo.equals(objetoViaje.getCodigo())){
                        sw = 1;
                    }else{
                        posicion++;
                    }
                }

                if(sw == 0){
                    Toast.makeText(this, "Código de viaje no registrado", Toast.LENGTH_SHORT).show();
                    etCodigo.requestFocus();
                }else{
                    Intent intCodigo = new Intent(this, GuardarActivity.class);
                    intCodigo.putExtra("codigo", codigo);
                    startActivity(intCodigo);
                }
            }
        }
    }

    public void registrar(View view){
        Intent intRegresar = new Intent(this, RegistrarActivity.class);
        startActivity(intRegresar);
    }
}
