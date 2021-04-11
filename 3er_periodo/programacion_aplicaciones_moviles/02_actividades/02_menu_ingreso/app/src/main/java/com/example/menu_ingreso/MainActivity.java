package com.example.menu_ingreso;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;

public class MainActivity extends AppCompatActivity {

    EditText jetusuario, jetclave;
    Button jbtingresar, jbtregistrarse;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        //asociar los objetos java
        getSupportActionBar().hide();
        jetusuario=findViewById(R.id.etusuario);
        jetclave=findViewById(R.id.etclave);
        jbtingresar=findViewById(R.id.btingresar);
        jbtregistrarse=findViewById(R.id.btregistrarse);
    }
    //metodo para registrarse
    public void registrarse (View view){
        Intent intregistrase = new Intent(this,RegistrarseActivity.class);
        startActivity(intregistrase);
    }
}