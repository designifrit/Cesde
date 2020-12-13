package com.example.concesionario;

import android.annotation.SuppressLint;
import android.content.ContentValues;
import android.content.Intent;
import android.database.Cursor;
import android.database.sqlite.SQLiteDatabase;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

public class RegistrarActivity extends AppCompatActivity {

    Button btBackMain, btLimpiar, btConsultar, btRegistrarV;
    EditText etPlaca, etModelo, etMarca, etPrecio, etIngPassword, etVerPassword;
    String placa, modelo, marca, precio, clave1, clave2;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_registrar);

        btBackMain = findViewById(R.id.btBackMain);
        btLimpiar = findViewById(R.id.btLimpiar);
        btConsultar = findViewById(R.id.btConsultar);
        btRegistrarV = findViewById(R.id.btRegistrarV);
        etPlaca = findViewById(R.id.etPlaca);
        etModelo = findViewById(R.id.etModelo);
        etMarca = findViewById(R.id.etMarca);
        etPrecio = findViewById(R.id.etPrecio);
        etIngPassword = findViewById(R.id.etIngPassword);
        etVerPassword = findViewById(R.id.etVerPassword);
    }

    public void Consultar (View view){
        MainSQLiteOpenHelper conectarDb = new MainSQLiteOpenHelper(this, "Concesionario", null, 1);
        SQLiteDatabase db = conectarDb.getReadableDatabase();

        placa = etPlaca.getText().toString();

        if(placa.isEmpty()){
            Toast.makeText(this, "Número de placa requerido", Toast.LENGTH_LONG).show();
            etPlaca.requestFocus();
        }else{
            @SuppressLint("Recycle") Cursor fila = db.rawQuery("SELECT * FROM usuario WHERE idPlaca = '" + placa + "' ", null);

            if(fila.moveToFirst()){
                etModelo.setText(fila.getString(1));
                etMarca.setText(fila.getString(2));
                etPrecio.setText(fila.getString(3));
                //etIngPassword.setText(fila.getString(4));
                //etVerPassword.setText(fila.getString(4));
            }else{
                Toast.makeText(this, "La placa no se encuentra registrada", Toast.LENGTH_LONG).show();
                etPlaca.requestFocus();
                Limpiar(view);
            }
        }
        db.close();
    }

    public void Registrar (View view){
        MainSQLiteOpenHelper conectarDb = new MainSQLiteOpenHelper(this, "Concesionario", null, 1);
        SQLiteDatabase db = conectarDb.getWritableDatabase();

        placa = etPlaca.getText().toString();
        modelo = etModelo.getText().toString();
        marca = etMarca.getText().toString();
        precio = etPrecio.getText().toString();
        clave1 = etIngPassword.getText().toString();
        clave2 = etVerPassword.getText().toString();

        if(placa.isEmpty() || modelo.isEmpty() || marca.isEmpty() || precio.isEmpty() || clave1.isEmpty() || clave2.isEmpty()){
            Toast.makeText(this, "Todos los campos son requeridos", Toast.LENGTH_LONG).show();
            etPlaca.requestFocus();
        }else{
            if(!clave1.equals(clave2)){
                Toast.makeText(this, "La contraseña deben coincidir", Toast.LENGTH_LONG).show();
                etIngPassword.requestFocus();
            }else{
                ContentValues dato = new ContentValues();

                dato.put("idPlaca", placa);
                dato.put("modelo", modelo);
                dato.put("marca", marca);
                dato.put("precio", precio);
                dato.put("password", clave1);

                long respuesta = db.insert("usuario", null, dato);

                if(respuesta > 0){
                    Toast.makeText(this, "Registro guardado", Toast.LENGTH_SHORT).show();
                    Limpiar(view);
                }else{
                    Toast.makeText(this, "Error al guardar el registro", Toast.LENGTH_LONG).show();
                }
            }
        }
        db.close();
    }

    public void Regresar (View view){
        Intent intRegresar = new Intent(this, MainActivity.class);
        startActivity(intRegresar);
    }

    public void Limpiar (View view){
        etPlaca.setText("");
        etModelo.setText("");
        etMarca.setText("");
        etPrecio.setText("");
        etIngPassword.setText("");
        etVerPassword.setText("");
    }
}