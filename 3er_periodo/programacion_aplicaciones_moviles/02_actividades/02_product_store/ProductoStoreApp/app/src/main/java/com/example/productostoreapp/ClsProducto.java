package com.example.productostoreapp;

import android.os.Parcel;
import android.os.Parcelable;

public class ClsProducto implements Parcelable { // Se implementa parcelable para poder pasar el objeto a una nueva actividad "se debe parcelar el objeto primero"
    private String producto;
    private String descripcion;
    private int existencias;
    private int valor;

    public ClsProducto(String producto, String descripcion, int existencias, int valor) {
        this.producto = producto;
        this.descripcion = descripcion;
        this.existencias = existencias;
        this.valor = valor;
    }

    protected ClsProducto(Parcel in) {
        producto = in.readString();
        descripcion = in.readString();
        existencias = in.readInt();
        valor = in.readInt();
    }

    public static final Creator<ClsProducto> CREATOR = new Creator<ClsProducto>() {
        @Override
        public ClsProducto createFromParcel(Parcel in) {
            return new ClsProducto(in);
        }

        @Override
        public ClsProducto[] newArray(int size) {
            return new ClsProducto[size];
        }
    };

    public String getProducto() {
        return producto;
    }

    public void setProducto(String producto) {
        this.producto = producto;
    }

    public String getDescripcion() {
        return descripcion;
    }

    public void setDescripcion(String descripcion) {
        this.descripcion = descripcion;
    }

    public int getExistencias() {
        return existencias;
    }

    public void setExistencias(int existencias) {
        this.existencias = existencias;
    }

    public int getValor() {
        return valor;
    }

    public void setValor(int valor) {
        this.valor = valor;
    }

    // Estos 2 métodos permiten la serialización
    @Override
    public int describeContents() {
        return 0;
    }

    // Estos 2 métodos permiten la serialización
    @Override
    public void writeToParcel(Parcel dest, int flags) {
        dest.writeString(producto);
        dest.writeString(descripcion);
        dest.writeInt(existencias);
        dest.writeInt(valor);
    }
}
