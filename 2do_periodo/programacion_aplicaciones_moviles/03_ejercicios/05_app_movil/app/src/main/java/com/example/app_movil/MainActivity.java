package com.example.app_movil;

import androidx.appcompat.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {

    /* MVC
        Se asocia los elementos de VISTA con la del MODELO
    */
    EditText etespacio, ettiempo;
    TextView tvvelocidad;
    Button btCalcular, btLimpiar;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        etespacio = findViewById(R.id.etespacio);
        ettiempo = findViewById(R.id.ettiempo);
        tvvelocidad = findViewById(R.id.tvvelocidad);
        btCalcular = findViewById(R.id.btnCalcular);
        btLimpiar = findViewById(R.id.btnlimpiar);
    }

    public void CalcularVelocidad(View view){
        String espacio, tiempo;
        espacio = etespacio.getText().toString();
        tiempo = ettiempo.getText().toString();
        if(espacio.isEmpty() || tiempo.isEmpty()){
            Toast.makeText(this, "Los campos Espacio y Tiempo son requeridos", Toast.LENGTH_LONG).show();
            etespacio.requestFocus();
        }else{
            double esp, tie, vel;
            esp = Double.parseDouble(espacio);
            tie = Double.parseDouble(tiempo);
            if(tie == 0){
                Toast.makeText(this, "Operación no válida", Toast.LENGTH_SHORT).show();
                ettiempo.requestFocus();
            }else{
                vel = esp / tie;
                vel = Math.round(vel);
                tvvelocidad.setText(String.valueOf(vel));
            }
        }
    }
    public void limpiarCampos(View view){
        ettiempo.setText("");
        etespacio.setText("");
        tvvelocidad.setText("");
        etespacio.requestFocus();
    }
}