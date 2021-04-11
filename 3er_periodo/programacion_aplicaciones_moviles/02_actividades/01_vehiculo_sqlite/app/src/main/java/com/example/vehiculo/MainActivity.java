package com.example.vehiculo_sqlite;

import android.content.ContentValues;
import android.database.Cursor;
import android.database.sqlite.SQLiteDatabase;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import androidx.appcompat.app.AppCompatActivity;

public class MainActivity extends AppCompatActivity {

    EditText jetplaca,jetmarca,jetmodelo,jetvalor;
    Button jbtguardar,jbtconsultar,jbteliminar,jbtanular;
    int sw=0;
    long resp;
    String activo;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        //Asociar los objetos Java con los objetos Xml
        getSupportActionBar().hide();
        jetplaca=findViewById(R.id.etplaca);
        jetmarca=findViewById(R.id.etmarca);
        jetmodelo=findViewById(R.id.etmodelo);
        jetvalor=findViewById(R.id.etvalor);
        jbtguardar=findViewById(R.id.btguardar);
        jbtconsultar=findViewById(R.id.btconsultar);
        jbteliminar=findViewById(R.id.bteliminar);
        jbtanular=findViewById(R.id.btanular);
    }

    public void anular(View view){
        AdminSqLiteOpenHelper admin=new AdminSqLiteOpenHelper(this,"bdconcesionario1",null,1);
        SQLiteDatabase db=admin.getWritableDatabase();
        String placa;
        placa=jetplaca.getText().toString();
        if (placa.isEmpty() || sw == 0){
            Toast.makeText(this,"La placa es requerida o debe consultar primero",Toast.LENGTH_LONG).show();
            jetplaca.requestFocus();
        }
        else{
            ContentValues dato=new ContentValues();
            dato.put("activo","no");
            resp=db.update("tblauto",dato,"placa='" + placa + "'",null);
            sw=0;
            if (resp > 0) {
                Toast.makeText(this,"Registro guardado",Toast.LENGTH_LONG).show();
                limpiar_datos();
            }
            else{
                Toast.makeText(this,"Error guardando registro",Toast.LENGTH_LONG).show();
            }
        }
    }

    public void guardar(View view)
    {
        AdminSqLiteOpenHelper admin=new AdminSqLiteOpenHelper(this,"bdconcesionario1",null,1);
        SQLiteDatabase db=admin.getWritableDatabase();
        String placa,marca,modelo,valor;
        placa=jetplaca.getText().toString();
        marca=jetmarca.getText().toString();
        modelo=jetmodelo.getText().toString();
        valor=jetvalor.getText().toString();
        if (placa.isEmpty() || marca.isEmpty() || modelo.isEmpty() || valor.isEmpty())
        {
            Toast.makeText(this,"Todos los datos son requeridos",Toast.LENGTH_LONG).show();
            jetplaca.requestFocus();
        }
        else{
            ContentValues dato=new ContentValues();
            dato.put("placa",placa);
            dato.put("marca",marca);
            dato.put("modelo",modelo);
            dato.put("valor",valor);
            dato.put("activo","si");
            if (sw==0){
                resp=db.insert("tblauto",null,dato);
            }
            else {
                if (activo.equals("no")) {
                    Toast.makeText(this, "Registro no se puede modificar esta inactivo", Toast.LENGTH_LONG).show();
                    limpiar_datos();
                } else {
                    resp = db.update("tblauto", dato, "placa='" + placa + "'", null);
                    sw = 0;
                    if (resp > 0) {
                        Toast.makeText(this, "Registro guardado", Toast.LENGTH_LONG).show();
                        limpiar_datos();
                    } else {
                        Toast.makeText(this, "Error guardando registro", Toast.LENGTH_LONG).show();
                    }
                }
            }
        }
        db.close();
    }

    public void limpiar_datos(){
        jetplaca.setText("");
        jetmarca.setText("");
        jetmodelo.setText("");
        jetvalor.setText("");
        jetplaca.requestFocus();
        sw=0;
    }

    public void limpiar(View view){
        limpiar_datos();
    }

    public void consultar(View view){
        AdminSqLiteOpenHelper admin=new AdminSqLiteOpenHelper(this,"bdconcesionario1",null,1);
        SQLiteDatabase db=admin.getReadableDatabase();
        String placa;
        placa=jetplaca.getText().toString();
        if (placa.isEmpty()){
            Toast.makeText(this,"La placa es requerida para consultar",Toast.LENGTH_LONG).show();
            jetplaca.requestFocus();
        }
        else{
            Cursor fila=db.rawQuery("select * from tblauto where placa='" + placa + "'",null);
            if (fila.moveToFirst()) {
                jetmarca.setText(fila.getString(1));
                jetmodelo.setText(fila.getString(2));
                jetvalor.setText(fila.getString(3));
                activo=fila.getString(4);
                sw=1;
                Toast.makeText(this,"El estado del registro es " + fila.getString(4),Toast.LENGTH_LONG).show();
            }
            else{
                Toast.makeText(this,"Automovil no registrado",Toast.LENGTH_LONG).show();
                jetplaca.requestFocus();
            }
        }
        db.close();
    }

    public void eliminar(View view)
    {
        AdminSqLiteOpenHelper admin=new AdminSqLiteOpenHelper(this,"bdconcesionario1",null,1);
        SQLiteDatabase db=admin.getWritableDatabase();
        String placa;
        placa=jetplaca.getText().toString();
        if (placa.isEmpty() || sw == 0){
            Toast.makeText(this,"La placa es requerida o debe primero consultar", Toast.LENGTH_LONG).show();
            jetplaca.requestFocus();
        }
        else{
            int resp=  db.delete("tblauto","placa='" + placa + "'",null);
            if (resp > 0){
                Toast.makeText(this,"Registro eliminado", Toast.LENGTH_LONG).show();
                limpiar_datos();
            }
            else{
                Toast.makeText(this,"Error eliminando registro", Toast.LENGTH_LONG).show();
            }
        }
        db.close();
    }
}
