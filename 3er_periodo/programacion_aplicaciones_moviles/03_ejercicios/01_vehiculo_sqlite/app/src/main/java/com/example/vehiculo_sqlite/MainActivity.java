package com.example.vehiculo_sqlite;

import android.content.ContentValues;
import android.database.Cursor;
import android.database.sqlite.SQLiteDatabase;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {

    EditText etPlaca, etMarca, etModelo, etValor;
    Button btGuardar, btConsultar, btEliminar, btAnular;
    int sw = 0;
    long respuesta;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        getSupportActionBar().hide();

        // Asociar los objetos Java
        etPlaca = findViewById(R.id.etPlaca);
        etMarca = findViewById(R.id.etMarca);
        etModelo = findViewById(R.id.etModelo);
        etValor = findViewById(R.id.etValor);
        btConsultar = findViewById(R.id.btConsultar);
        btGuardar = findViewById(R.id.btGuardar);
        btEliminar = findViewById(R.id.btEliminar);
        btAnular = findViewById(R.id.btAnular);
    }

    public void anular(View view){
        AdminSQLiteOpenHelper administrador = new AdminSQLiteOpenHelper(this, "BDconcesionario1", null, 1);
        SQLiteDatabase db = administrador.getWritableDatabase();

        String placa, activo = "no";
        placa = etPlaca.getText().toString();

        if(placa.isEmpty() || sw == 0){
            Toast.makeText(this, "La placa es requueridad para consultar", Toast.LENGTH_SHORT).show();
            etPlaca.requestFocus();
        }else{
            ContentValues dato =  new ContentValues();
            dato.put("activo", activo);

            respuesta = db.update("auto", dato, "placa = '" + placa + "'", null);
            sw = 0;

            if(respuesta > 0){
                Toast.makeText(this, "Registro guardado",Toast.LENGTH_SHORT).show();
                limpiarDatos();
            }else{
                Toast.makeText(this, "Error al guardar el registro",Toast.LENGTH_SHORT).show();
            }
        }
    }

    public void guardar(View view){
        // Se le envía al construuctor los 4 parámetros
        AdminSQLiteOpenHelper administrador = new AdminSQLiteOpenHelper(this, "BDconcesionario1", null, 1);
        SQLiteDatabase db = administrador.getWritableDatabase();

        String placa, marca, modelo, valor, activo = "si";
        placa = etPlaca.getText().toString();
        marca = etMarca.getText().toString();
        modelo = etModelo.getText().toString();
        valor = etValor.getText().toString();

        if(placa.isEmpty() || marca.isEmpty() || modelo.isEmpty() || valor.isEmpty()){
            Toast.makeText(this, "Todos los datos son requeridos", Toast.LENGTH_SHORT).show();
            etPlaca.requestFocus();
        }else{
            // Contenedor para enviar los datos a la BD
            ContentValues dato = new ContentValues();
            dato.put("placa", placa);
            dato.put("marca", marca);
            dato.put("modelo", modelo);
            dato.put("valor", valor);
            dato.put("activo", activo);

            if(sw == 0){
                respuesta = db.insert("auto", null, dato);
            }else{
                respuesta = db.update("auto", dato, "placa = '" + placa + "'",null);
                sw = 0;
            }

            if(respuesta > 0){
                Toast.makeText(this, "Registro guardado",Toast.LENGTH_SHORT).show();
                limpiarDatos();
            }else{
                Toast.makeText(this, "Error al guardar el registro",Toast.LENGTH_SHORT).show();
            }
        }
        db.close();
    }

    public void consultar(View view){
        AdminSQLiteOpenHelper administrador = new AdminSQLiteOpenHelper(this, "BDconcesionario1", null, 1);
        SQLiteDatabase db = administrador.getReadableDatabase();

        String placa;
        placa = etPlaca.getText().toString();

        if(placa.isEmpty()){
            Toast.makeText(this, "La placa es requerida", Toast.LENGTH_SHORT).show();
            etPlaca.requestFocus();
        }else{
            // Apuntador, para consultar en la BD
            Cursor fila = db.rawQuery("select * from auto where placa='" + placa + "'", null);
            if(fila.moveToFirst()){
                etMarca.setText(fila.getString(1));
                etModelo.setText(fila.getString(2));
                etValor.setText(fila.getString(3));
                sw = 1;

                Toast.makeText(this, "El estado del registro es :" + fila.getString(4), Toast.LENGTH_SHORT).show();
            }else{
                Toast.makeText(this, "Automovil no registrado", Toast.LENGTH_SHORT).show();
                etPlaca.requestFocus();
            }
        }
        db.close();
    }

    public void eliminar(View view){
        AdminSQLiteOpenHelper administrador = new AdminSQLiteOpenHelper(this, "BDconcesionario1", null, 1);
        SQLiteDatabase db = administrador.getWritableDatabase();

        String placa;
        placa = etPlaca.getText().toString();

        if(placa.isEmpty() || sw == 0){
            Toast.makeText(this, "Ingresa el número de placa", Toast.LENGTH_SHORT).show();
            etPlaca.requestFocus();
        }else{
            int respuesta = db.delete("auto", "placa = '" + placa + "'", null);
            if(respuesta > 0){
                Toast.makeText(this, "Registro eliminado", Toast.LENGTH_SHORT).show();
                limpiarDatos();
            }else{
                Toast.makeText(this, "Error eliminado el registro", Toast.LENGTH_SHORT).show();
            }
        }
        db.close();
    }

    public void limpiar(View view){
        limpiarDatos();
    }

    public void limpiarDatos(){
        etPlaca.setText("");
        etMarca.setText("");
        etModelo.setText("");
        etValor.setText("");
        etPlaca.requestFocus();
        sw = 0;
    }
}
