package com.example.salario;

import androidx.appcompat.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {

    EditText etnumero, etvalor;
    TextView tvbasico, tvdeducciones, tvtransporte, tvneto;
    Button btcalcular, btlimpiar;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);


        getSupportActionBar().hide();
        etnumero = findViewById(R.id.etnumero);
        etvalor = findViewById(R.id.etvalor);
        tvbasico = findViewById(R.id.tvbasico);
        tvdeducciones = findViewById(R.id.tvdeducciones);
        tvtransporte = findViewById(R.id.tvtransporte);
        tvneto = findViewById(R.id.tvneto);
        btcalcular = findViewById(R.id.btcalcular);
        btlimpiar = findViewById(R.id.btlimpiar);
    }

    public void calcularSalario(View view){
        String numero, valor;
        numero = etnumero.getText().toString();
        valor = etvalor.getText().toString();

        if(numero.isEmpty() || valor.isEmpty()){
            Toast.makeText(this, "La cantidad de horas y el valor son requeridos", Toast.LENGTH_LONG).show();
            etnumero.requestFocus();
        }else{
            double cantidad, precio, basico, deducciones, transporte, neto;
            cantidad = Double.parseDouble(numero);
            precio = Double.parseDouble(valor);
            basico = cantidad * precio;

            if(basico <= 882000 * 4){
                deducciones = basico * 8 / 100;
            }else{
                deducciones = basico * 9 / 100;
            }

            if(basico <= 882000 * 2){
                transporte = 97700;
            }else{
                transporte = 0;
            }
            neto = basico - deducciones + transporte;

            tvbasico.setText(String.valueOf(basico));
            tvdeducciones.setText(String.valueOf(deducciones));
            tvtransporte.setText(String.valueOf(transporte));
            tvneto.setText(String.valueOf(neto));
        }
    }

    public void limpiarDatos(View view){
        etnumero.setText("");
        etvalor.setText("");
        tvneto.setText("");
        tvtransporte.setText("");
        tvdeducciones.setText("");
        tvbasico.setText("");

        etnumero.requestFocus();
    }
}