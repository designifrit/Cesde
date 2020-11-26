package com.example.viaje;

import android.annotation.SuppressLint;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.CheckBox;
import android.widget.EditText;
import android.widget.RadioButton;
import android.widget.RadioGroup;
import android.widget.TextView;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {

    RadioButton rbAvion, rbBus, rbTaxi, rbLasagna, rbPizza, rbHamburguesa;
    EditText etCantTickets;
    TextView tvTotal;
    CheckBox cbPropina;
    Button btCalcular, btLimpiar;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        // getSupportActionBar().hide();
        rbAvion = findViewById(R.id.rbAvion);
        rbBus = findViewById(R.id.rbBus);
        rbTaxi = findViewById(R.id.rbTaxi);
        rbLasagna = findViewById(R.id.rbLasagna);
        rbPizza = findViewById(R.id.rbPizza);
        rbHamburguesa = findViewById(R.id.rbHamburguesa);
        etCantTickets = findViewById(R.id.etCantTickets);
        tvTotal = findViewById(R.id.tvTotal);
        cbPropina = findViewById(R.id.cbPropina);
        btCalcular = findViewById(R.id.btCalcular);
        btLimpiar = findViewById(R.id.btLimpiar);
    }

    public int HallarCostoTransporte(View view){
        int cantPersonas, medTransporte, costoTransporte;
        cantPersonas = 0;
        costoTransporte = 0;
        medTransporte = 0;
        cantPersonas = Integer.parseInt(etCantTickets.getText().toString());

        if(rbAvion.isChecked()){
            medTransporte = 210000;
        }else if(rbBus.isChecked()) {
            medTransporte = 75000;
        }else if(rbTaxi.isChecked()){
            medTransporte = 135000;
        }

        costoTransporte = medTransporte * cantPersonas;

        return costoTransporte;
    }

    @SuppressLint("SetTextI18n")
    public  int HallarCostoAlimentacion(View view){
        int cantPersona, aliment, costAliments;
        cantPersona = 0;
        aliment = 0;
        costAliments = 0;

        if(rbAvion.isChecked()){
            if(rbLasagna.isChecked()){
                aliment = 14500;
            }else if(rbPizza.isChecked()){
                aliment = 11000;
            }else if(rbHamburguesa.isChecked()){
                aliment = 16500;
            }
        }else if(rbBus.isChecked() || rbTaxi.isChecked()){
            if(rbHamburguesa.isChecked() || rbPizza.isChecked() || rbLasagna.isChecked()) {
                aliment = 0;
                Toast.makeText(this, "La alimentación solo aplica para viajes en Avión", Toast.LENGTH_SHORT).show();

                rbLasagna.setChecked(false);
                rbPizza.setChecked(false);
                rbHamburguesa.setChecked(false);
                tvTotal.setText("0");
            }
        }

        cantPersona = Integer.parseInt(etCantTickets.getText().toString());
        costAliments = aliment * cantPersona;

        return  costAliments;
    }

    public double HallarCostoPropina(View view){
        int costTransported, costaAlimentary;
        double valProp;
        valProp = 0;
        costTransported = 0;
        costaAlimentary = 0;

        costTransported = HallarCostoTransporte(view);
        costaAlimentary = HallarCostoAlimentacion(view);

        if(cbPropina.isChecked()){
            valProp = (costTransported + costaAlimentary) * 0.10;
        }else{
            valProp = 0;
        }

        return valProp;
    }

    public void HallarTotal(View view){
        double total;
        total = 0;

        if(rbAvion.isChecked() || rbTaxi.isChecked() || rbBus.isChecked()){
            total = HallarCostoTransporte(view) + HallarCostoAlimentacion(view) + HallarCostoPropina(view);
            tvTotal.setText(String.valueOf(total));
        }else{
            Toast.makeText(this, "Seleccione una opción de viaje", Toast.LENGTH_SHORT).show();
        }
    }

    public void Limpiar(View view){
        rbAvion.setChecked(false);
        rbBus.setChecked(false);
        rbTaxi.setChecked(false);
        rbLasagna.setChecked(false);
        rbPizza.setChecked(false);
        rbHamburguesa.setChecked(false);
        cbPropina.setChecked(false);
        etCantTickets.setText("1");
        tvTotal.setText("0");
    }
}