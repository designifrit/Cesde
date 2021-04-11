package com.example.menu_ingreso;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import java.util.ArrayList;

public class RegistrarseActivity extends AppCompatActivity {
    EditText jetusuario, jetnombre, jetclave1,jetclave2;
    Button jbtconsultar, jbtadicionar, jbtmodificar, jbtelimnar, jbtlimpiar , jbtregresar;

    ClsPersona opersona;
    ArrayList<ClsPersona> alpersona;
    int pos;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_registrarse);

        //asociar objetos java
        getSupportActionBar().hide();
        jetusuario=findViewById(R.id.etusuario);
        jetnombre=findViewById(R.id.etnombre);
        jetclave1=findViewById(R.id.etclave1);
        jetclave2=findViewById(R.id.etclave2);
        jbtconsultar=findViewById(R.id.btconsultar);
        jbtadicionar=findViewById(R.id.btadicionar);
        jbtmodificar=findViewById(R.id.btmodificar);
        jbtelimnar=findViewById(R.id.bteliminar);
        jbtlimpiar=findViewById(R.id.btlimpiar);
        jbtregresar=findViewById(R.id.btregresar);
        alpersona = new ArrayList<ClsPersona>();
    }

    public void adicionar_person(View view){
        String usuario, nombre, clave1, clave2;
        usuario = jetusuario.getText().toString();
        nombre = jetnombre.getText().toString();
        clave1 = jetclave1.getText().toString();
        clave2 = jetclave2.getText().toString();

        if(usuario.isEmpty() || nombre.isEmpty() || clave1.isEmpty() || clave2.isEmpty()){
            Toast.makeText(this, "Ingresa los campos requeridos", Toast.LENGTH_SHORT).show();
            jetusuario.requestFocus();
        }else{
            if(!clave1.equals(clave2)){
                Toast.makeText(this, "Las claves son diferentes", Toast.LENGTH_SHORT).show();
                jetclave1.setText("");
                jetclave2.setText("");
                jetclave1.requestFocus();
            }else{
                opersona = new ClsPersona(usuario, nombre, clave1);
                alpersona.add(opersona);
                Toast.makeText(this, "Registro guardado", Toast.LENGTH_SHORT).show();
                limpiar_campos();
            }
        }
    }

    public void consultar_arrayList(){
        pos = 0;
        int sw = 0;
        String usuario = jetusuario.getText().toString();
        if(usuario.isEmpty()){
            Toast.makeText(this, "La iidentificación del usuario es requerida", Toast.LENGTH_SHORT).show();
            jetusuario.requestFocus();
        }else {
            while(pos < alpersona.size() && sw == 0){
                opersona = alpersona.get(pos);
                if(usuario.equals(opersona.getIdentificacion())){
                    sw = 1;
                }else {
                    pos++;
                }
            }
            if(sw == 0){
                Toast.makeText(this, "Identificación no esta registrado", Toast.LENGTH_SHORT).show();
                pos = -1;
            }
            else{
                jetnombre.setText(opersona.getNombre());
                jetclave1.setText(opersona.getClave());
                jetclave2.setText(opersona.getClave());
            }
        }
    }

    public void consultar(View view){
        consultar_arrayList();
    }

    public void modificar(View view){
        if(pos != -1){
            String usuario, nombre, clave1, clave2;
            usuario = jetusuario.getText().toString();
            nombre = jetnombre.getText().toString();
            clave1 = jetclave1.getText().toString();
            clave2 = jetclave2.getText().toString();

            if(usuario.isEmpty() || nombre.isEmpty() || clave1.isEmpty() || clave2.isEmpty()){
                Toast.makeText(this, "Ingresa los campos requeridos", Toast.LENGTH_SHORT).show();
                jetusuario.requestFocus();
            }else {
                if (!clave1.equals(clave2)) {
                    Toast.makeText(this, "Las claves son diferentes", Toast.LENGTH_SHORT).show();
                    jetclave1.setText("");
                    jetclave2.setText("");
                    jetclave1.requestFocus();
                } else {
                    alpersona.get(pos).setNombre(nombre);
                    alpersona.get(pos).setClave(clave1);
                    limpiar_campos();
                }
            }
        }
    }

    public void eliminar(View view){
        if(pos != -1){
            alpersona.remove(pos);
            limpiar_campos();
        }
    }

    private void limpiar_campos(){
        jetusuario.setText("");
        jetnombre.setText("");
        jetclave1.setText("");
        jetclave2.setText("");
        jetusuario.requestFocus();
    }
}