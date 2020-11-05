package com.example.fiesta;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.CheckBox;
import android.widget.EditText;
import android.widget.RadioButton;
import android.widget.TextView;
import java.util.Objects;

public class MainActivity extends AppCompatActivity {

    RadioButton rbVip, rbPalco, rbLaterales, rbGeneral, rbAguardiente, rbRon, rbWhisky;
    EditText ptCantPersonas;
    EditText ptCantLicor;
    CheckBox cbPropina;
    Button btTotal;
    TextView tvTotal;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        //Objects.requireNonNull(getSupportActionBar()).hide();
        rbVip = findViewById(R.id.rbVip);
        rbPalco = findViewById(R.id.rbPalco);
        rbLaterales = findViewById(R.id.rbLaterales);
        rbGeneral = findViewById(R.id.rbGeneral);
        rbAguardiente = findViewById(R.id.rbAguardiente);
        rbRon = findViewById(R.id.rbRon);
        rbWhisky = findViewById(R.id.rbWhisky);
        ptCantPersonas = findViewById(R.id.ptCantPersonas);
        ptCantLicor = findViewById(R.id.ptCantLicor);
        cbPropina = findViewById(R.id.cbPropina);
        btTotal = findViewById(R.id.btTotal);
        tvTotal = findViewById(R.id.tvTotal);
    }

    public int HallarCostoBoleta(View view){
        int costoBoleta, totalCostoBoleta, cantidadPersonas;
        costoBoleta = 0;
        totalCostoBoleta = 0;
        cantidadPersonas = 0;

        if(rbVip.isChecked()){
            costoBoleta = 50000;
        }else if(rbPalco.isChecked()){
            costoBoleta = 35000;
        }else if(rbLaterales.isChecked()){
            costoBoleta = 20000;
        }else if(rbGeneral.isChecked()){
            costoBoleta = 25000;
        }

        cantidadPersonas = Integer.parseInt(ptCantPersonas.getText().toString());
        totalCostoBoleta = costoBoleta * cantidadPersonas;
        return totalCostoBoleta;
    }

    public int HallarCostoLicor(View view){
        int costoLicor, totalCostoLicor, cantLicor, propina;
        costoLicor = 0;
        totalCostoLicor = 0;
        cantLicor = 0;
        propina = 10;

        if(rbAguardiente.isChecked()){
            costoLicor = 15000;
        }else if(rbRon.isChecked()){
            costoLicor = 18000;
        }else if(rbWhisky.isChecked()) {
            costoLicor = 25000;
        }

        cantLicor = Integer.parseInt(ptCantLicor.getText().toString());

        if(cbPropina.isChecked()){
            totalCostoLicor = ((costoLicor * cantLicor) * propina / 100) + (costoLicor * cantLicor);
        }else{
            totalCostoLicor = (costoLicor * cantLicor);
        }

        return totalCostoLicor;
    }

    public void HallarTotal(View view){
        int total;
        total = 0;

        total = HallarCostoBoleta(view) + HallarCostoLicor(view);
        tvTotal.setText(String.valueOf(total));
    }
}