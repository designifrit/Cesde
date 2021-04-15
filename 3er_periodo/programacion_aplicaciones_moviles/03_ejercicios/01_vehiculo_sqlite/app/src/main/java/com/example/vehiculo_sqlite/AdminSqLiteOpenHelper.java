package com.example.vehiculo_sqlite;

import android.content.Context;
import android.database.sqlite.SQLiteDatabase;
import android.database.sqlite.SQLiteOpenHelper;
import android.support.annotation.Nullable;

// ######################### Base de datos embebida
// Clase para conectar a la base de datos
public class AdminSQLiteOpenHelper extends SQLiteOpenHelper {

    // Constructor
    public AdminSQLiteOpenHelper(@Nullable Context context, @Nullable String name, @Nullable SQLiteDatabase.CursorFactory factory, int version) {
        super(context, name, factory, version);
    }

    // ####################### Métodos
    // Create
    @Override
    public void onCreate(SQLiteDatabase db) {
        db.execSQL("create table auto(placa text primary key, marca text, modelo text, valor text, activo text)");
    }

    // Update
    @Override
    public void onUpgrade(SQLiteDatabase db, int oldVersion, int newVersion) {
        db.execSQL("drop table if exists auto");
        db.execSQL("create table auto(placa text primary key, marca text, modelo text, valor text)");
    }
}
