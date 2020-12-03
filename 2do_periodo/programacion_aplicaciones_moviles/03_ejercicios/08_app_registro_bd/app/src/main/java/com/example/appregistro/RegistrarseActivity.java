package com.example.appregistro;

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

public class RegistrarseActivity extends AppCompatActivity {

    EditText etUsuario, etNombre, etPassword1, etPassword2;
    Button btConsultar, btAdicionar, btModificar, btEliminar, btLimpiar, btRegresar;
    String usuario, nombre, password1, password2;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_registrarse);

        etUsuario = findViewById(R.id.etUsuario);
        etNombre = findViewById(R.id.etNombre);
        etPassword1 = findViewById(R.id.etPassword1);
        etPassword2 = findViewById(R.id.etPassword2);
        btConsultar = findViewById(R.id.btConsultar);
        btAdicionar = findViewById(R.id.btAdicionar);
        btModificar = findViewById(R.id.btModificar);
        btEliminar = findViewById(R.id.btEliminar);
        btLimpiar = findViewById(R.id.btLimpiar);
        btRegresar = findViewById(R.id.btRegresar);
    }

    public void Guardar(View view){
        MainSQLiteOpenHelper admin = new MainSQLiteOpenHelper(this, "Concesionario", null, 1);
        SQLiteDatabase db = admin.getWritableDatabase();

        usuario = etUsuario.getText().toString();
        nombre = etNombre.getText().toString();
        password1 = etPassword1.getText().toString();
        password2 = etPassword2.getText().toString();

        if(usuario.isEmpty() || nombre.isEmpty() || password1.isEmpty() ||password2.isEmpty()){
            Toast.makeText(this, "Todos los campos son obligatorios", Toast.LENGTH_LONG).show();
            etUsuario.requestFocus();
        }else{
            if(!password1.equals(password2)){
                Toast.makeText( this, "La contraseña debe ser la misma", Toast.LENGTH_LONG).show();
                etPassword1.requestFocus();
            }else{
                /* Contenedor para almacenar datos en BD */
                ContentValues datos = new ContentValues();
                datos.put("idUsuario", usuario);
                datos.put("nombre", nombre);
                datos.put("clave", password1);

                long respuesta = db.insert("Usuario", null, datos);

                if(respuesta > 0){
                    Toast.makeText(this, "Registrto guardado", Toast.LENGTH_LONG).show();
                    LimpiarCampos();
                }else{
                    Toast.makeText(this, "Error al guardar registro", Toast.LENGTH_SHORT).show();
                }
            }
        }
    }

    public void Consultar(View view){
        usuario = etUsuario.getText().toString();

        if(usuario.isEmpty()){
            Toast.makeText(this, "El usuario es requerido", Toast.LENGTH_LONG).show();
            etUsuario.requestFocus();
        }else{
            MainSQLiteOpenHelper Admin = new MainSQLiteOpenHelper(this, "Concesionario", null, 1);
            SQLiteDatabase db = Admin.getReadableDatabase();

            Cursor fila = db.rawQuery("SELECT * FROM Usuario WHERE idUsuario = '" + usuario + "' ", null);
            if(fila.moveToFirst()){
                etNombre.setText(fila.getString(1));
                etPassword1.setText(fila.getString(2));
                etPassword2.setText(fila.getString(2));
            }else{
                Toast.makeText(this, "El usuario no esta registrado", Toast.LENGTH_LONG).show();
            }
            db.close();
        }
    }

    public void Modificar(View view){
        usuario = etUsuario.getText().toString();
        nombre = etNombre.getText().toString();
        password1 = etPassword1.getText().toString();
        password2 = etPassword2.getText().toString();

        if(usuario.isEmpty() || nombre.isEmpty() || password1.isEmpty() || password2.isEmpty()){
            Toast.makeText(this, "Todos los datos son requeridos", Toast.LENGTH_LONG).show();
            etUsuario.requestFocus();
        }else{
            if(!password1.equals(password2)){
                Toast.makeText(this, "No coincide la contraseña", Toast.LENGTH_LONG).show();
            }else{
                MainSQLiteOpenHelper Admin = new MainSQLiteOpenHelper(this, "Concesionario", null, 1);
                SQLiteDatabase db = Admin.getWritableDatabase();

                /* Contenedor para almacenar datos en BD */
                ContentValues datos = new ContentValues();
                datos.put("idUsuario", usuario);
                datos.put("nombre", nombre);
                datos.put("clave", password1);

                long respuesta = db.update("Usuario", datos, "idUsuario = '" + usuario + "'", null);

                if(respuesta > 0){
                    Toast.makeText(this, "Registro modificado", Toast.LENGTH_LONG).show();
                    LimpiarCampos();
                }else{
                    Toast.makeText(this, "Error modificando el registro", Toast.LENGTH_LONG).show();
                }
                db.close();
            }
        }
    }

    public void Eliminar(View view){
        usuario = etUsuario.getText().toString();

        if(usuario.isEmpty()){
            Toast.makeText(this, "Usuario requerido para eliminar",Toast.LENGTH_LONG).show();
            etUsuario.requestFocus();
        }else{
            MainSQLiteOpenHelper Admin = new MainSQLiteOpenHelper(this, "Concesionario", null, 1);
            SQLiteDatabase db = Admin.getWritableDatabase();

            long respuesta = db.delete("Usuario", "idUsuario = '" + usuario + "' ", null);

            if(respuesta > 0){
                Toast.makeText(this, "Registro eliminado",Toast.LENGTH_LONG).show();
                LimpiarCampos();
            }else{
                Toast.makeText(this, "Error al eliminar el registro", Toast.LENGTH_LONG).show();
                etUsuario.requestFocus();
            }
            db.close();
        }
    }

    public void LimpiarCampos(){
        etUsuario.setText("");
        etNombre.setText("");
        etPassword1.setText("");
        etPassword2.setText("");
        etUsuario.requestFocus();
    }

    public void Limpiar(View view){
        LimpiarCampos();
    }

    public void Regresar(View view){
        Intent intMain = new Intent(this, MainActivity.class);
        startActivity(intMain);
    }
}
