import React from 'react';

const Card = () => {
    return (
        <div>
            <Card key={item.id} className="row justify-content-center mt-2 shadow-sm">
                <Card.Body>
                    <Card.Title>{item.titulo}</Card.Title>
                    <Card.Text>{item.descricao}</Card.Text>
                    <Button variant="primary">Clique aqui</Button>
                </Card.Body>
            </Card>
        </div>
    )
}
export default Card;