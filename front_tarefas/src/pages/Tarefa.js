import React, { useEffect, useState } from 'react';
import Button from 'react-bootstrap/Button';
import Card from 'react-bootstrap/Card';
import axios from 'axios';
import { Api_Url } from '../utility/Api_Url';

const Tarefa = () => {
    const [tarefa, setTarefa] = useState('');
    
    useEffect(() => {
        getTarefa()
    }, []);

    function getTarefa(){
        axios
        .get(Api_Url + 'tarefas')
        .then(function(response){
            setTarefa(response.data);
            console.log(response);
        })
        .catch(function(error){
            console.log(error);
        })
        
    }
    console.log(tarefa);
    return (
        <div className="row justify-content-center mt-5">
            <div className="col-md-8">
                {tarefa && tarefa.map((item) => 
                <Card key={item.id} className="row justify-content-center mt-2 shadow-sm"> 
                 <Card.Body>
                    <Card.Title>{item.titulo}</Card.Title>
                    <Card.Text>{item.descricao}</Card.Text>
                    <Button variant="primary">Clique aqui</Button>
                </Card.Body>
                </Card>
            )}
            </div>
        </div>
    );
};

export default Tarefa;