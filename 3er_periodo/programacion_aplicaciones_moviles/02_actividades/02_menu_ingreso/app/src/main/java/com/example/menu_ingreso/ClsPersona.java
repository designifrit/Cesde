package com.example.menu_ingreso;

public class ClsPersona
{
    private String identificacion;
    private String nombre;
    private String clave;

    public ClsPersona(String identificacion, String nombre, String clave) {
        this.identificacion = identificacion;
        this.nombre = nombre;
        this.clave = clave;
    }

    public String getIdentificacion() {
        return identificacion;
    }

    public void setIdentificacion(String identificacion) {
        this.identificacion = identificacion;
    }

    public String getNombre() {
        return nombre;
    }

    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    public String getClave() {
        return clave;
    }

    public void setClave(String clave) {
        this.clave = clave;
    }

    @Override
    public String toString() {
        return "ClsPersona{" +
                "identificacion='" + identificacion + '\'' +
                ", nombre='" + nombre + '\'' +
                ", clave='" + clave + '\'' +
                '}';
    }
}
