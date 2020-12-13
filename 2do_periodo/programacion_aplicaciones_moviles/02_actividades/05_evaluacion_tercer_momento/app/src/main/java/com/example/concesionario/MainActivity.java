package com.example.concesionario;

import android.annotation.SuppressLint;
import android.content.Intent;
import android.database.Cursor;
import android.database.sqlite.SQLiteDatabase;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {

    EditText etPlaca, etPassword;
    Button btIngresar, btRegistrar;
    String placa, clave;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        etPlaca = findViewById(R.id.etPlaca);
        etPassword = findViewById(R.id.etPassword);
        btIngresar = findViewById(R.id.btIngresar);
        btRegistrar = findViewById(R.id.btRegistrar);
    }

    public void Ingresar (View view){
        MainSQLiteOpenHelper conectarDb = new MainSQLiteOpenHelper(this, "Concesionario", null, 1);
        SQLiteDatabase db = conectarDb.getReadableDatabase();

        placa = etPlaca.getText().toString();
        clave = etPassword.getText().toString();

        if(placa.isEmpty() || clave.isEmpty()){
            Toast.makeText(this, "La placa y la contraseña son requeridos", Toast.LENGTH_LONG).show();
            etPlaca.requestFocus();
        }else{
            @SuppressLint("Recycle") Cursor fila = db.rawQuery("SELECT * FROM usuario WHERE idPlaca = '" + placa + "' and password = '" + clave + "' ", null);

            if(fila.moveToFirst()){
                Intent intIngresar = new Intent(this, IngresarActivity.class);
                intIngresar.putExtra("dato", placa);
                startActivity(intIngresar);
            }else{
                Toast.makeText(this, "Número de placa o contraseña inválida", Toast.LENGTH_LONG).show();
                etPlaca.requestFocus();
            }
        }
        db.close();
    }

    public void Registrar (View view){
        Intent intRegistrar = new Intent(this, RegistrarActivity.class);
        startActivity(intRegistrar);
    }
}