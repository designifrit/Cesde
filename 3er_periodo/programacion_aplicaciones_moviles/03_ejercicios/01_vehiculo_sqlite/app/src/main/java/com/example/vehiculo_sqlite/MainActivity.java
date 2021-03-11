package com.example.vehiculo_sqlite;

import androidx.appcompat.app.AppCompatActivity;

import android.content.ContentValues;
import android.database.Cursor;
import android.database.CursorIndexOutOfBoundsException;
import android.database.sqlite.SQLiteDatabase;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {
    EditText jetplaca, jetmarca, jetmodelo, jetvalor;
    Button jbtguardar, jbtconsultar, jbteliminar, jbtlimpiar;
    int sw;
    long resp;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        getSupportActionBar().hide();

       jetplaca=findViewById(R.id.etplaca);
       jetmarca=findViewById(R.id.etmarca);
       jetmodelo=findViewById(R.id.etmodelo);
       jetvalor=findViewById(R.id.etvalor);

       jbtguardar=findViewById(R.id.btguardar);
       jbtconsultar=findViewById(R.id.btconsultar);
       jbteliminar=findViewById(R.id.bteliminar);
       jbtlimpiar=findViewById(R.id.btlimpiar);

    }

    public void guardar(View view)
    {
        AdminSqLiteOpenHelper admin= new AdminSqLiteOpenHelper(this,"bdconcesionario",null, 1);
        SQLiteDatabase db=admin.getWritableDatabase();
        String placa, marca, modelo, valor;
        placa=jetplaca.getText().toString();
        marca=jetmarca.getText().toString();
        modelo=jetmodelo.getText().toString();
        valor=jetvalor.getText().toString();
        if (placa.isEmpty()|| marca.isEmpty()|| modelo.isEmpty()|| valor.isEmpty())
        {
            Toast.makeText(this, "todos los datos son requeridos",Toast.LENGTH_LONG).show();
            jetplaca.requestFocus();

        }
        else{
            ContentValues dato=new ContentValues();
            dato.put("placa",placa);
            dato.put("marca",marca);
            dato.put("modelo",modelo);
            dato.put("valor",valor);
            if (sw==0)
            {
                resp=db.insert("tblauto",null, dato);
            }
            else {
                resp=db.update("tblauto",dato,"placa='" + placa + "'",null);
                sw=0;
            }

            if (resp > 0)
            {
                Toast.makeText(this, "Registro Guardado",Toast.LENGTH_LONG).show();

                limpiar_datos();
            }
            else{
                Toast.makeText(this, "Error guardando",Toast.LENGTH_LONG).show();
            }

        }
        db.close();
    }

    public void  limpiar_datos()
    {
        jetplaca.setText("");
        jetmarca.setText("");
        jetmodelo.setText("");
        jetvalor.setText("");
        jetplaca.requestFocus();
        sw=0;
    }
    public void limpiar(View view)
    {
        limpiar_datos();
    }

    public void consultar (View view)
    {
        AdminSqLiteOpenHelper admin= new AdminSqLiteOpenHelper(this,"bdconcesionario",null, 1);
        SQLiteDatabase db=admin.getReadableDatabase();

        String placa;
        placa=jetplaca.getText().toString();
        if (placa.isEmpty())
        {
            Toast.makeText(this, "placa requerida",Toast.LENGTH_LONG).show();
            jetplaca.requestFocus();

        }
        else
        {
            Cursor fila=db.rawQuery("select * from tblauto where placa='" + placa + "'",null);
            if (fila.moveToFirst())
            {
                jetmarca.setText(fila.getString(1));
                jetmodelo.setText(fila.getString(2));
                jetvalor.setText(fila.getString(3));
                sw=1;
            }
            else{
                Toast.makeText(this, "Auto no registrado",Toast.LENGTH_LONG).show();
                jetplaca.requestFocus();
            }
        }
        db.close();

    }

    public void eliminar(View view) {

        AdminSqLiteOpenHelper admin = new AdminSqLiteOpenHelper(this, "bdconcesionario", null, 1);
        SQLiteDatabase db = admin.getWritableDatabase();

        String placa;

        placa = jetplaca.getText().toString();

        if (placa.isEmpty()) {

            Toast.makeText(this, "Debe ingresar la PLACA para hacer la consulta", Toast.LENGTH_LONG).show();
            jetplaca.requestFocus();

        }else if (sw == 1) {
                resp = db.delete("tblauto", "placa='" + placa + "'", null);
                Toast.makeText(this,"Auto Eliminado con exito",Toast.LENGTH_LONG).show();
                limpiar_datos();

            }else {
                Toast.makeText( this,"Error al eliminar el registro",Toast.LENGTH_LONG).show();
            }
        db.close();
        }

    }

