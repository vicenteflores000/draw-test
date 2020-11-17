
var reserva_canchas_sistema_usuario = {
    nombre: "lewandowski",
    author: 5,
    status: 2,
    created_at: "12-11-2020 11:49"
};

var reserva_canchas_oficina = {
    id: 9,
    nombre: "lewandowski",
    author_id: 5,
    status: 3,
    created_at: "12-11-2020 11:49",
    updated_at: "12-11-2020 11:49"
};

var reserva_canchas_agenda = {
    id: 9,
    cliente: 78,
    recurso_id: 123,
    responsable_id: 124,
    fecha: "12-11-2020",
    hora_inicio: "11:49",
    valor: 22.000,
    estado: "disponible, reservado, confirmado, cancelado",
    author_id: 5,
    status: 6,
    created_at: "12-11-2020 11:49",
    updated_at: "12-11-2020 11:49"
};

var reserva_canchas_empresa_externo = {
    id: 9,
    empresa: 55,
    rut: "11.111.111-4",
    nombre: "lewandowski",
    correo: "lewandowski@gmail.com",
    celular: "+56 9 9999 9999",
    es_cliente: 2,
    es_proveedor: 3,
    author_id: 65,
    status: 6,
    created_at: "12-11-2020 11:49",
    updated_at: "12-11-2020 11:49"
};

var reserva_canchas_empresa_externo_datos_extra = {
    id: 9,
    key: "injs",
    value: "asjcdsajd",
    externo_id: 66,
    author_id: 56,
    status: 3,
    created_at: "12-11-2020 11:49",
    updated_at: "12-11-2020 11:49"
};

function usuario(nombre, author, status, created_at) {
    this.nombre = nombre;
    this.author = author;
    this.status = status;
    this.created_at = created_at;
};

function oficina(id, nombre, author_id, status, created_at, updated_at) {
    this.id = id;
    this.nombre = nombre;
    this.author_id = author_id;
    this.status = status;
    this.created_at = created_at;
    this.updated_at = updated_at;
};

function agenda(id, nombre, author_id, status, created_at, updated_at) {
    this.id = id;
    this.nombre = nombre;
    this.author_id = author_id;
    this.status = status;
    this.created_at = created_at;
    this.updated_at = updated_at;
};

function externo(id, empresa, rut, nombre, correo, celular, es_cliente, es_proveedor, author_id, status, created_at, updated_at) {
    this.id = id;
    this.empresa = empresa;
    this.rut = rut;
    this.nombre = nombre;
    this.correo = correo;
    this.celular = celular;
    this.es_cliente = es_cliente;
    this.es_proveedor = es_proveedor;
    this.author_id = author_id;
    this.status = status;
    this.created_at = created_at;
    this.updated_at = updated_at;
};

function extra(id, key, value, externo_id, author_id, status, created_at, updated_at) {
    this.id = id;
    this.key = key;
    this.value = value;
    this.externo_id = externo_id;
    this.author_id = author_id;
    this.status = status;
    this.created_at = created_at;
    this.updated_at = updated_at;
};

const objeto = {
    reserva_canchas_sistema_usuario: function (nombre, author, status, created_at) {
        this.nombre = nombre;
        this.author = author;
        this.status = status;
        this.created_at = created_at;
    },
    oficina: function (id, nombre, author_id, status, created_at, updated_at) {
        this.id = id;
        this.nombre = nombre;
        this.author_id = author_id;
        this.status = status;
        this.created_at = created_at;
        this.updated_at = updated_at;
    },
    agenda: function (id, nombre, author_id, status, created_at, updated_at) {
        this.id = id;
        this.nombre = nombre;
        this.author_id = author_id;
        this.status = status;
        this.created_at = created_at;
        this.updated_at = updated_at;
    },
    externo: function (id, empresa, rut, nombre, correo, celular, es_cliente, es_proveedor, author_id, status, created_at, updated_at) {
        this.id = id;
        this.empresa = empresa;
        this.rut = rut;
        this.nombre = nombre;
        this.correo = correo;
        this.celular = celular;
        this.es_cliente = es_cliente;
        this.es_proveedor = es_proveedor;
        this.author_id = author_id;
        this.status = status;
        this.created_at = created_at;
        this.updated_at = updated_at;
    },
    extra: function (id, key, value, externo_id, author_id, status, created_at, updated_at) {
        this.id = id;
        this.key = key;
        this.value = value;
        this.externo_id = externo_id;
        this.author_id = author_id;
        this.status = status;
        this.created_at = created_at;
        this.updated_at = updated_at;
    },

    
};

