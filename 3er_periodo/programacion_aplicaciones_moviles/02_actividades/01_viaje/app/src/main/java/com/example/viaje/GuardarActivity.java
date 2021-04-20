package com.example.viaje;

import android.content.Intent;
import android.database.Cursor;
import android.database.sqlite.SQLiteDatabase;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

public class GuardarActivity extends AppCompatActivity {
    EditText etCodigo2, etCiudad2, etPersona2, etValor2;
    Button btConsultarSQL, btLimpiar2, btRegresar2;
    String codigo;
    int sw = 0;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_guardar);

        getSupportActionBar().hide();
        etCodigo2 = findViewById(R.id.etCodigo2);
        etCiudad2 = findViewById(R.id.etCiudad2);
        etPersona2 = findViewById(R.id.etPersonas2);
        etValor2 = findViewById(R.id.etValor2);
        btConsultarSQL = findViewById(R.id.btConsultarSQL);
        btLimpiar2 = findViewById(R.id.btLimpiar2);
        btRegresar2 = findViewById(R.id.btRegresar2);

        codigo = getIntent().getStringExtra("codigo");
        etCodigo2.setText(codigo);
    }

    public void consultarSQL(View view){
        AdminSQLiteOpenHelper administrador = new AdminSQLiteOpenHelper(this, "DBviaje", null, 1);
        SQLiteDatabase db = administrador.getReadableDatabase();

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

    public void limpiar2(View view){
        limpiarCampos();
    }

    public void limpiarCampos(){
        etCodigo2.setText("");
        etCiudad2.setText("");
        etPersona2.setText("");
        etValor2.setText("");
        etCodigo2.requestFocus();
    }

    public void regresar2(View view){
        Intent intRegresar = new Intent(this, MainActivity.class);
        startActivity(intRegresar);
    }
}