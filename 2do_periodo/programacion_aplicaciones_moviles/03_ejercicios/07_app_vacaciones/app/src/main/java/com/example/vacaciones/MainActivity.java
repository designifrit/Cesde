package com.example.vacaciones;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.CheckBox;
import android.widget.RadioButton;
import android.widget.TextView;

import java.util.Objects;

public class MainActivity extends AppCompatActivity {

    RadioButton jrbcartagena, jrbcancun, jrbleticia, jrbdecamenron, jrbhilton, jrbsol;
    TextView jtvciudad, jtvhotel, jtvautomovil, jtvtotal;
    CheckBox jcbautomovil;
    Button jbtcalcular, jbtlimpiar;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        Objects.requireNonNull(getSupportActionBar()).hide();
        jrbcartagena = findViewById(R.id.rbcartagena);
        jrbcancun = findViewById(R.id.rbcancun);
        jrbleticia = findViewById(R.id.rbleticia);
        jtvciudad = findViewById(R.id.tvciudad);
        jtvhotel = findViewById(R.id.tvhotel);
        jrbdecamenron = findViewById(R.id.rbdecameron);
        jrbhilton = findViewById(R.id.rbhilton);
        jrbsol = findViewById(R.id.rbsol);
        jtvautomovil = findViewById(R.id.tvautomovil);
        jcbautomovil = findViewById(R.id.cbautomovil);
        jtvtotal = findViewById(R.id.tvtotal);
        jbtcalcular = findViewById(R.id.btcalcular);
        jbtlimpiar = findViewById(R.id.btlimpiar);
    }

    public void HallarCostoCiudad(View view){
        if(jrbcartagena.isChecked()){
            jtvciudad.setText("600000");
        }else{
            if(jrbcancun.isChecked()){
                jtvciudad.setText("1300000");
            }else{
                jtvciudad.setText("1200000");
            }
        }
    }

    public void HallarCostohotel(View view){
        if(jrbdecamenron.isChecked()){
            jtvhotel.setText("500000");
        }else{
            if(jrbhilton.isChecked()){
                jtvhotel.setText("1200000");
            }else{
                jtvhotel.setText("700000");
            }
        }
    }

    public void HallarCostoAutomovil(View view){
        if(jcbautomovil.isChecked()){
            jtvautomovil.setText("400000");
        }else{
            jtvautomovil.setText("0");
        }
    }

    public void HallarTotal(View view){
        double ciudad, hotel, automovil, total;
        ciudad = Double.parseDouble(jtvciudad.getText().toString());
        hotel = Double.parseDouble(jtvhotel.getText().toString());
        automovil = Double.parseDouble(jtvautomovil.getText().toString());
        total = ciudad + hotel + automovil;

        jtvtotal.setText(String.valueOf(total));
    }

    public void Limpiar(View view){
        jrbcancun.isChecked();
        jrbdecamenron.isChecked();
//        jtvhotel.setText("500000");
        jcbautomovil.setChecked(false);
        jtvtotal.setText("0");
    }
}