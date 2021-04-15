package com.example.menuingreso;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import java.util.ArrayList;

public class MainActivity extends AppCompatActivity {

    EditText etUsuario, etPassword;
    Button btIngresar, btRegistrar;
    ClsPersona objetoPersona;   // registro que tiene la misma estructura de ClsPersona
    ArrayList<ClsPersona> arrayListPersona;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        getSupportActionBar().hide();
        etUsuario = findViewById(R.id.etUsuario);
        etPassword = findViewById(R.id.etPassword);
        btIngresar = findViewById(R.id.btIngresar);
        btRegistrar = findViewById(R.id.btRegistrar);
        arrayListPersona = (ArrayList<ClsPersona>) getIntent().getSerializableExtra("Lista");
    }

    public void ingresar(View view){
        String usuario, password;
        usuario = etUsuario.getText().toString();
        password = etPassword.getText().toString();

        if(usuario.isEmpty() || password.isEmpty()){
            Toast.makeText(this, "Digita los campos requeridos", Toast.LENGTH_SHORT).show();
            etUsuario.requestFocus();
        }else{
            // Se trae la lista Array desde Registrarse activity
            if(getIntent().getSerializableExtra("Lista").toString() == null){
                Toast.makeText(this, "La lista está vacia, primero debbes registrarte", Toast.LENGTH_SHORT).show();
            }else{
                int sw = 0, posicion = 0;
                while(posicion < arrayListPersona.size() && sw == 0){
                    objetoPersona = arrayListPersona.get(posicion);
                    if(usuario.equals(objetoPersona.getIdentificacion()) && password.equals(objetoPersona.getClave())){
                        sw = 1;
                    }else{
                        posicion++;
                    }
                }

                if(sw == 0){
                    Toast.makeText(this, "Usuario o clave inválidos", Toast.LENGTH_SHORT).show();
                    etUsuario.requestFocus();
                    etPassword.setText("");
                }else{
                    Intent intIngresar = new Intent(this, IngresarActivity.class);
                    startActivity(intIngresar);
                }
            }
        }
    }

    public void registrarse(View view){
        Intent intRegistrarse = new Intent(this, RegistrarseActivity.class);
        startActivity(intRegistrarse);
    }
}