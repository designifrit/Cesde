package com.example.viaje;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import java.util.ArrayList;

public class RegistrarActivity extends AppCompatActivity {

    EditText etCodigo, etCiudad, etPersona, etValor;
    Button btConsultar, btAdicionar, btModificar, btAnular, btLimpiar, btRegresar;
    int posicion;
    ClsViaje objetoViaje;
    ArrayList<ClsViaje> arrayListViaje;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_registrar);

        getSupportActionBar().hide();
        etCodigo = findViewById(R.id.etCodigo);
        etCiudad = findViewById(R.id.etCiudad);
        etPersona = findViewById(R.id.etPersona);
        etValor = findViewById(R.id.etValor);
        btConsultar = findViewById(R.id.btConsultar);
        btAdicionar = findViewById(R.id.btAdicionar);
        btModificar = findViewById(R.id.btModificar);
        btAnular = findViewById(R.id.btAnular);
        btLimpiar = findViewById(R.id.btLimpiar);
        btRegresar = findViewById(R.id.btRegresar);

        arrayListViaje = new ArrayList<ClsViaje>();
    }

    public void adicionar(View view){
        String codigo, ciudad, persona, valor;

        codigo = etCodigo.getText().toString();
        ciudad = etCiudad.getText().toString();
        persona = etPersona.getText().toString();
        valor = etValor.getText().toString();

        if(codigo.isEmpty() || ciudad.isEmpty() || persona.isEmpty() || valor.isEmpty()){
            Toast.makeText(this, "Por favor ingresa los datos requeridos", Toast.LENGTH_SHORT).show();
            etCodigo.requestFocus();
        }else{
            objetoViaje = new ClsViaje(codigo, ciudad, persona, valor);
            arrayListViaje.add(objetoViaje);

            Toast.makeText(this, "Registro guardado", Toast.LENGTH_SHORT).show();
            limpiarCampos();
        }
    }

    public void consultar(View view){
        posicion = 0;
        int sw = 0;

        String codigo = etCodigo.getText().toString();

        if(codigo.isEmpty()){
            Toast.makeText(this, "El código del viaje es requerido", Toast.LENGTH_SHORT).show();
            etCodigo.requestFocus();
        }else{
            while (posicion < arrayListViaje.size() && sw == 0){
                objetoViaje = arrayListViaje.get(posicion);
                if(codigo.equals(objetoViaje.getCodigo())){
                    sw = 1;
                }else{
                    posicion++;
                }
            }

            if(sw == 0){
                Toast.makeText(this, "Registro no encontrado", Toast.LENGTH_SHORT).show();
                posicion=-1;
            }else{
                etCiudad.setText(objetoViaje.getCiudad());
                etPersona.setText(objetoViaje.getPersona());
                etValor.setText(objetoViaje.getValor());
            }
        }
    }

    public void modificar(View view){
        if(posicion != -1){
            String codigo, ciudad, persona, valor;

            codigo = etCodigo.getText().toString();
            ciudad = etCiudad.getText().toString();
            persona = etPersona.getText().toString();
            valor = etValor.getText().toString();

            if(codigo.isEmpty() || ciudad.isEmpty() || persona.isEmpty() || valor.isEmpty()){
                Toast.makeText(this, "Todos los datos son requeridos", Toast.LENGTH_SHORT).show();
                etCodigo.requestFocus();
            }else{
                arrayListViaje.get(posicion).setCodigo(codigo);
                arrayListViaje.get(posicion).setCiudad(ciudad);
                arrayListViaje.get(posicion).setPersona(persona);
                arrayListViaje.get(posicion).setValor(valor);

                limpiarCampos();
                Toast.makeText(this, "Registro modificado", Toast.LENGTH_SHORT).show();
            }
        }
    }

    public void anular(View view){
        Boolean anular = true;
        if(posicion != -1){
            arrayListViaje.remove(posicion);
//          arrayListViaje.get(posicion).setAnular(anular);
            Toast.makeText(this, "Registro anulado", Toast.LENGTH_SHORT).show();
            limpiarCampos();
        }else{
            Toast.makeText(this, "Consulte primero un registro para poder eliminarlo", Toast.LENGTH_SHORT).show();
            etCodigo.requestFocus();
        }
    }

    public void limpiar(View view){
        limpiarCampos();
    }

    public void limpiarCampos(){
        etCodigo.setText("");
        etCiudad.setText("");
        etPersona.setText("");
        etValor.setText("");
        etCodigo.requestFocus();
    }

    public void regresar(View view){
        Intent intRegresar = new Intent(this, MainActivity.class);
        startActivity(intRegresar);
    }
}