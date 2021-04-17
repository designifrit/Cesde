//package com.example.viaje;
//
//import android.content.Context;
//import android.database.sqlite.SQLiteDatabase;
//import android.database.sqlite.SQLiteOpenHelper;
//import android.support.annotation.Nullable;
//
//public class AdminSQLiteOpenHelper extends SQLiteOpenHelper {
//    public AdminSQLiteOpenHelper(@Nullable Context context, @Nullable String name, @Nullable SQLiteDatabase.CursorFactory factory, int version) {
//        super(context, name, factory, version);
//    }
//
//    @Override
//    public void onCreate(SQLiteDatabase db) {
//        db.execSQL("create table viaje(codigo text primary key, ciudad text, persona text, valor text, int)");
//    }
//
//    @Override
//    public void onUpgrade(SQLiteDatabase db, int oldVersion, int newVersion) {
//        db.execSQL("drop table if exists viaje");
//        db.execSQL("create table viaje(codigo text primary key, ciudad text, persona text, valor text)");
//    }
//}
