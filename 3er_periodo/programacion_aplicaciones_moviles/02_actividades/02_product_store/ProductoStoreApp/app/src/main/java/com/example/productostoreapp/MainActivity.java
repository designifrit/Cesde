package com.example.productostoreapp;

import androidx.fragment.app.FragmentManager;
import androidx.appcompat.app.AppCompatActivity;
import android.os.Bundle;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        //Se permite la utilizacion del fragment (fragment_sesion)
        // en el layout con nombre escenario
        FragmentManager fm = getSupportFragmentManager();
        fm.beginTransaction().replace(R.id.mainActivity,new SesionFragment()).commit();
    }
}