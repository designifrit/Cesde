package com.example.appregistro;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {

    EditText etUsuario, etContrasena;
    Button btIngresar, btRegistrarse;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

//      getSupportActionBar().hide();
        etUsuario = findViewById(R.id.etUsuario);
        etContrasena = findViewById(R.id.etContrasena);
        btIngresar = findViewById(R.id.btIngresar);
        btRegistrarse = findViewById(R.id.btRegistrarse);
    }

    public void Ingresar(View view){
        String usuario, clave;

        usuario = etUsuario.getText().toString();
        clave = etContrasena.getText().toString();

        if(usuario.isEmpty() || clave.isEmpty()) {
            Toast.makeText(this, "Usuario y contraseña son requeridos", Toast.LENGTH_LONG).show();
            etUsuario.requestFocus();
        }else{
            /* Biblioteca clase Intent */
            Intent intIngresar = new Intent(this, SaludoActivity.class);
            intIngresar.putExtra("datos", usuario);
            startActivity(intIngresar);
        }
    }

    public void Registrarse(View view){
        Intent intRegistrarse = new Intent(this, RegistrarseActivity.class);
        startActivity(intRegistrarse);
    }
}
