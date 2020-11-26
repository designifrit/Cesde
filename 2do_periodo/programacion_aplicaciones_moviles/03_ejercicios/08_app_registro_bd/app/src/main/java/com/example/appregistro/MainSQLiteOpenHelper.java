package com.example.appregistro;

import android.content.Context;
import android.database.sqlite.SQLiteDatabase;
import android.database.sqlite.SQLiteOpenHelper;
import android.support.annotation.Nullable;

public class MainSQLiteOpenHelper extends SQLiteOpenHelper {

    public MainSQLiteOpenHelper(@Nullable Context context, @Nullable String name, @Nullable SQLiteDatabase.CursorFactory factory, int version) {
        super(context, name, factory, version);
    }

    @Override
    public void onCreate(SQLiteDatabase db) {
        db.execSQL("CREATE TABLE Usuario(idUsuario text primary key, nombre text, clave text)");
        db.execSQL("CREATE TABLE Auto(placa text primary key, marca text, modelo ext, valor text)");
    }

    @Override
    public void onUpgrade(SQLiteDatabase db, int oldVersion, int newVersion) {
        db.execSQL("DROP TABLE Usuario");
        {
            onCreate(db);
        }

        db.execSQL("DROP TABLE Auto");
        {
            onCreate(db);
        }
    }
}
