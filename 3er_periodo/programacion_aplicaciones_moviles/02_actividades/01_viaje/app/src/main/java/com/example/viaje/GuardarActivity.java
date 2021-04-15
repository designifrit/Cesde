package com.example.viaje;

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

import java.util.ArrayList;

public class GuardarActivity extends AppCompatActivity {
    EditText etCodigo2, etCiudad2, etPersona2, etValor2;
    Button btGuadarSQL, btConsultarSQL, btLimpiar2, btRegresar2;
    String codigo;
    long respuesta;
    int posicion, sw = 0;

    ClsViaje objetoViaje;
    ArrayList<ClsViaje> arrayListViaje;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_guardar);

        getSupportActionBar().hide();
        etCodigo2 = findViewById(R.id.etCodigo2);
        etCiudad2 = findViewById(R.id.etCiudad2);
        etPersona2 = findViewById(R.id.etPersonas2);
        etValor2 = findViewById(R.id.etValor2);
        btGuadarSQL = findViewById(R.id.btGuardarSQL);
        btConsultarSQL = findViewById(R.id.btConsultarSQL);
        btLimpiar2 = findViewById(R.id.btLimpiar2);
        btRegresar2 = findViewById(R.id.btRegresar2);

        arrayListViaje = (ArrayList<ClsViaje>) getIntent().getSerializableExtra("lista");

        // Traer código de viaje para consultar en ArrayList
        codigo = getIntent().getStringExtra("codigo");
        etCodigo2.setText(codigo);
    }

    public void consultarArray(View view){
        // Consultar ArrayList por código de viaje
        sw = 0;
        posicion = 0;

        codigo = getIntent().getStringExtra("codigo");
        etCodigo2.setText(codigo);

        while (posicion < arrayListViaje.size() && sw == 0){

            // Recorrer ArrayList hasta encontrar el registro
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
        }else {
            etCiudad2.setText(objetoViaje.getCiudad());
            etPersona2.setText(objetoViaje.getPersona());
            etValor2.setText(objetoViaje.getValor());
        }
    }

    public void guardarSQL(View view){
        AdminSQLiteOpenHelper administrador = new AdminSQLiteOpenHelper(this, "DBviaje", null, 1);
        SQLiteDatabase db = administrador.getWritableDatabase();

        String codigo, ciudad, persona, valor;
        codigo = etCodigo2.getText().toString();
        ciudad = etCiudad2.getText().toString();
        persona = etPersona2.getText().toString();
        valor = etValor2.getText().toString();

        if(codigo.isEmpty() || ciudad.isEmpty() || persona.isEmpty() || valor.isEmpty()){
            Toast.makeText(this, "Todos los datos son requeridos", Toast.LENGTH_SHORT).show();
            etCodigo2.requestFocus();
        }else{
            // Contenedor para enviar los datos a la BD
            ContentValues dato = new ContentValues();
            dato.put("codigo", codigo);
            dato.put("ciudad", ciudad);
            dato.put("persona", persona);
            dato.put("valor", valor);

            if(sw == 0){
                respuesta = db.insert("viaje", null, dato);
            }else{
                respuesta = db.update("viaje", dato, "codigo = '" + codigo + "'",null);
                sw = 0;
            }

            if(respuesta > 0){
                Toast.makeText(this, "Registro guardado",Toast.LENGTH_SHORT).show();
                limpiarCampos();
            }else{
                Toast.makeText(this, "Error al guardar el registro",Toast.LENGTH_SHORT).show();
            }
        }
        db.close();
    }

    public void consultarSQL(View view){
        AdminSQLiteOpenHelper administrador = new AdminSQLiteOpenHelper(this, "DBviaje", null, 1);
        SQLiteDatabase db = administrador.getReadableDatabase();

        String codigo;
        codigo = etCodigo2.getText().toString();

        if(codigo.isEmpty()){
            Toast.makeText(this, "El código es requerido", Toast.LENGTH_SHORT).show();
            etCodigo2.requestFocus();
        }else{
            // Apuntador, para consultar en la BD
            Cursor fila = db.rawQuery("select * from viaje where codigo='" + codigo + "'", null);
            if(fila.moveToFirst()){
                etCodigo2.setText(fila.getString(1));
                etCiudad2.setText(fila.getString(2));
                etPersona2.setText(fila.getString(3));
                etValor2.setText(fila.getString(4));
                sw = 1;
            }else{
                Toast.makeText(this, "Codigo de viaje no registrado", Toast.LENGTH_SHORT).show();
                etCodigo2.requestFocus();
            }
        }
        db.close();
    }

    public void limpiar(View view){
        limpiarCampos();
    }

    public void limpiarCampos(){
        etCodigo2.setText("");
        etCiudad2.setText("");
        etPersona2.setText("");
        etValor2.setText("");
        etCodigo2.requestFocus();
    }

    public void regresar(View view){
        Intent intRegresar = new Intent(this, MainActivity.class);
        intRegresar.putExtra("lista", arrayListViaje);
        startActivity(intRegresar);
    }
}