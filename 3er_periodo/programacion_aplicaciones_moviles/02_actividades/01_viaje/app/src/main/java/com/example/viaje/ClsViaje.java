package com.example.viaje;

import java.io.Serializable;

public class ClsViaje implements Serializable {
    private String codigo;
    private String ciudad;
    private String persona;
    private String valor;
    private Boolean anular;

    public ClsViaje(String codigo, String ciudad, String persona, String valor, Boolean anular) {
        this.codigo = codigo;
        this.ciudad = ciudad;
        this.persona = persona;
        this.valor = valor;
        this.anular = anular;
    }

    public String getCodigo() {
        return codigo;
    }

    public void setCodigo(String codigo) {
        this.codigo = codigo;
    }

    public String getCiudad() {
        return ciudad;
    }

    public void setCiudad(String ciudad) {
        this.ciudad = ciudad;
    }

    public String getPersona() {
        return persona;
    }

    public void setPersona(String persona) {
        this.persona = persona;
    }

    public String getValor() {
        return valor;
    }

    public void setValor(String valor) {
        this.valor = valor;
    }

    public Boolean getAnular() {
        return anular;
    }

    public void setAnular(Boolean anular) {
        this.anular = anular;
    }

    @Override
    public String toString() {
        return "ClsViaje{" +
                "codigo='" + codigo + '\'' +
                ", ciudad='" + ciudad + '\'' +
                ", persona='" + persona + '\'' +
                ", valor='" + valor + '\'' +
                ", anular=" + anular +
                '}';
    }
}
