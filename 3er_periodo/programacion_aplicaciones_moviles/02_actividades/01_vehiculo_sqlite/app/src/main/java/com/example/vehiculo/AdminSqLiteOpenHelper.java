package com.example.vehiculo_sqlite;

import android.content.Context;
import android.database.sqlite.SQLiteDatabase;
import android.database.sqlite.SQLiteOpenHelper;
import org.jetbrains.annotations.Nullable;

public class AdminSqLiteOpenHelper extends SQLiteOpenHelper {

    public AdminSqLiteOpenHelper(@Nullable Context context, @Nullable String name, @Nullable SQLiteDatabase.CursorFactory factory, int version) {
        super(context, name, factory, version);
    }

    @Override
    public void onCreate(SQLiteDatabase db) {
        db.execSQL("create table tblauto(placa text primary key, marca text,modelo text,valor text,activo text)");
    }

    @Override
    public void onUpgrade(SQLiteDatabase db, int oldVersion, int newVersion) {
        db.execSQL("drop table if exists tblauto");
        db.execSQL("create table tblauto(placa text primary key, marca text,modelo text,valor text)");
    }
}
