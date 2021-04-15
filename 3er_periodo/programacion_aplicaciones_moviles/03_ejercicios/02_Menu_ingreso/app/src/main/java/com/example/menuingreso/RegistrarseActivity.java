package com.example.menuingreso;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import java.util.ArrayList;

public class RegistrarseActivity extends AppCompatActivity {

    EditText etUsuario, etNombre, etPassword, etPassword2;
    Button btConsultar, btAdicionar, btModificar, btEliminar, btLimpiar, btRegresar;
    int posicion;
    // Objeto con la misma estructura de ClsPersona
    ClsPersona objetoPersona;

    /*
    La clase ArrayList en Java, es una clase que permite almacenar datos en memoria de forma similar a los Arrays,
    con la ventaja de que el numero de elementos que almacena, lo hace de forma dinámica, es decir,
    que no es necesario declarar su tamaño como pasa con los Arrays
    */
    ArrayList<ClsPersona> arrayListPersona;

    /* La idea de crear un ArrayList es para realizar determinada acción que es temporal */

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_registrarse);

        getSupportActionBar().hide();
        etUsuario = findViewById(R.id.etUsuario);
        etNombre = findViewById(R.id.etNombre);
        etPassword = findViewById(R.id.etPassword);
        etPassword2 = findViewById(R.id.etPassword2);
        btConsultar = findViewById(R.id.btConsultar);
        btAdicionar = findViewById(R.id.btAdicionar);
        btModificar = findViewById(R.id.btModificar);
        btEliminar = findViewById(R.id.btEliminar);
        btLimpiar = findViewById(R.id.btLimpiar);
        btRegresar = findViewById(R.id.btRegresar);

        arrayListPersona = new ArrayList<ClsPersona>();
    }

    // Adicionar en Array list
    public void adicionar(View view){
        String usuario, nombre, password, password2;
        usuario = etUsuario.getText().toString();
        nombre = etNombre.getText().toString();
        password = etPassword.getText().toString();
        password2 = etPassword2.getText().toString();

        if(usuario.isEmpty() || nombre.isEmpty() || password.isEmpty() || password2.isEmpty()){
            Toast.makeText(this, "Por favor ingresa todos los datos requeridos", Toast.LENGTH_SHORT).show();
            etUsuario.requestFocus();
        }else{
            if(!password.equals(password2)){
                Toast.makeText(this, "Las contraseñas deben ser iguales", Toast.LENGTH_SHORT).show();
                etPassword.setText("");
                etPassword2.setText("");
                etPassword.requestFocus();
            }else{
                // Enviar los datos de la memoria a través del objeto persona, que tiene la estructura de la ClsPersona
                // Se debe ingresar los datos requeridos al constructor
                objetoPersona = new ClsPersona(usuario, nombre, password);

                // Se almacena en un Array list
                arrayListPersona.add(objetoPersona);
                Toast.makeText(this, "Registro guardado", Toast.LENGTH_SHORT).show();

                limpiarCampos();
            }
        }
    }

    // Consultar en Array list
    public void consultar(View view){
        posicion = 0;
        int sw = 0;
        String usuario = etUsuario.getText().toString();

        if(usuario.isEmpty()){
            Toast.makeText(this, "La identificación del usuario es requerida", Toast.LENGTH_SHORT).show();
            etUsuario.requestFocus();
        }else{
            // Trae los datos desde el Array list hacia la memoria, para consultar
            while(posicion < arrayListPersona.size() && sw == 0){
                objetoPersona = arrayListPersona.get(posicion);
                if(usuario.equals(objetoPersona.getIdentificacion())){
                    // Encontró el registro
                    sw = 1;
                }else{
                    // No encontró el registro
                    posicion++;
                }
            }

            if(sw == 0){    // Si sw es == 0 quiere decir que el registro no existe
                Toast.makeText(this, "Usuario no registrado", Toast.LENGTH_SHORT).show();
                posicion=-1;
            }else{  // De lo contario SI encontró el registro
                etNombre.setText(objetoPersona.getNombre());
                etPassword.setText(objetoPersona.getClave());
                etPassword2.setText(objetoPersona.getClave());
            }
        }
//        return posicion;
    }

    public void modificar(View view){
        // Si posición es -1 quiere decir que no existe
        if(posicion != -1){
            String usuario, nombre, password, password2;

            usuario = etUsuario.getText().toString();
            nombre = etNombre.getText().toString();
            password = etPassword.getText().toString();
            password2 = etPassword2.getText().toString();

            if(usuario.isEmpty() || nombre.isEmpty() || password.isEmpty() || password2.isEmpty()){
                Toast.makeText(this, "Por favor ingresa todos los datos requeridos", Toast.LENGTH_SHORT).show();
                etUsuario.requestFocus();
            }else{
                if(!password.equals(password2)){
                    Toast.makeText(this, "Las contraseñas deben ser iguales", Toast.LENGTH_SHORT).show();
                    etPassword.setText("");
                    etPassword2.setText("");
                    etPassword.requestFocus();
                }else{
                    arrayListPersona.get(posicion).setNombre(nombre);
                    arrayListPersona.get(posicion).setClave(password);
                    limpiarCampos();
                }
            }
        }
    }

    public void eliminar(View view){
        // Si posicion es diferente a -1 quiere decir que ya lo consulté
        if(posicion != -1){
            arrayListPersona.remove(posicion);
            Toast.makeText(this, "Registro eliminado", Toast.LENGTH_SHORT).show();
            limpiarCampos();
        }else{
            Toast.makeText(this, "Consulte primero el registro para poder eliminarlo", Toast.LENGTH_SHORT).show();
        }
    }

    public void limpiar(View view){
        limpiarCampos();
    }

    public void limpiarCampos(){
        etUsuario.setText("");
        etNombre.setText("");
        etPassword.setText("");
        etPassword2.setText("");
        etUsuario.requestFocus();
    }

    public void regresar(View view){
        Intent intRegresar = new Intent(this, MainActivity.class);
        intRegresar.putExtra("Lista", arrayListPersona);
        startActivity(intRegresar);
    }
}