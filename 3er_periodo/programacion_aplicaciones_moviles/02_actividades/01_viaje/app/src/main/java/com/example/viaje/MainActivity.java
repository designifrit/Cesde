package com.example.viaje;

import android.content.ContentValues;
import android.content.Intent;
import android.database.sqlite.SQLiteDatabase;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import java.util.ArrayList;

public class MainActivity extends AppCompatActivity {

    EditText etCodigo;
    Button btGuardar, btRegistrar, btIrGuardar;

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
        btIrGuardar = findViewById(R.id.btIrGuardar);

        arrayListViaje = (ArrayList<ClsViaje>) getIntent().getSerializableExtra("lista");
    }

    public void guardar(View view){
        int sw = 0;
        String codigo;
        codigo = etCodigo.getText().toString();

        AdminSQLiteOpenHelper conexion = new AdminSQLiteOpenHelper(this, "DB_viaje", null, 1);
        SQLiteDatabase db = conexion.getWritableDatabase();

        if(codigo.isEmpty()){
            Toast.makeText(this, "ingresa el código de viaje", Toast.LENGTH_SHORT).show();
            etCodigo.requestFocus();
        }else{
            if(getIntent().getSerializableExtra("lista").toString() == null){
                Toast.makeText(this, "Primero debes registrar un viaje", Toast.LENGTH_SHORT).show();
            }
            else{
                posicion = 0;

                // Contenedor para transferir datos a la DB
                ContentValues contenedor = new ContentValues();

                while(posicion < arrayListViaje.size() && sw == 0){
                    objetoViaje = arrayListViaje.get(posicion);

                    if(codigo.equals(objetoViaje.getCodigo())){
                        sw = 1;
                    }else{
                        posicion++;
                    }
                }

                if(sw == 0){
                    Toast.makeText(this, "Viaje no registrado", Toast.LENGTH_SHORT).show();
                    etCodigo.requestFocus();
                }else{
                    contenedor.put("codigo", objetoViaje.getCodigo());
                    contenedor.put("ciudad", objetoViaje.getCiudad());
                    contenedor.put("persona", objetoViaje.getPersona());
                    contenedor.put("valor", objetoViaje.getValor());
                    contenedor.put("anular", objetoViaje.getAnular());

                    // Almacenar en base datos
                    long respuesta = db.insert("viaje", null, contenedor);

                    if (respuesta > 0) {
                        Toast.makeText(this, "Registro guardado", Toast.LENGTH_SHORT).show();

                        Intent intCodigo = new Intent(this, GuardarActivity.class);
                        intCodigo.putExtra("codigoDeViaje", codigo);
                        startActivity(intCodigo);
                    }
                    else {
                        Toast.makeText(this, "Error al guardar el registro, verifica que no esté registrado", Toast.LENGTH_SHORT).show();
                        etCodigo.requestFocus();
                    }
                }
                db.close();
            }
        }
    }

    public void btIrGuardar(View view){
        Intent intCodigo = new Intent(this, GuardarActivity.class);
        startActivity(intCodigo);
    }

    public void registrar(View view){
        Intent intRegresar = new Intent(this, RegistrarActivity.class);
        startActivity(intRegresar);
    }
}
