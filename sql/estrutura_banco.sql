
CREATE TABLE produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255),
    preco DECIMAL(10,2)
);

CREATE TABLE estoque (
    id INT AUTO_INCREMENT PRIMARY KEY,
    produto_id INT,
    variacao VARCHAR(255),
    quantidade INT,
    FOREIGN KEY (produto_id) REFERENCES produtos(id)
);

CREATE TABLE cupons (
    id INT AUTO_INCREMENT PRIMARY KEY,
    codigo VARCHAR(50),
    valor DECIMAL(10,2),
    validade DATE,
    valor_minimo DECIMAL(10,2)
);

CREATE TABLE pedidos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    data_pedido DATETIME,
    status VARCHAR(50),
    subtotal DECIMAL(10,2),
    frete DECIMAL(10,2),
    total DECIMAL(10,2)
);
