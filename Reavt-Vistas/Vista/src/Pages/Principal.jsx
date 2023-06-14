import styled from "styled-components";
import Header from "./CompPrincipal/Header";

const Principal = () => {
    return (
        <Divpadre>
            Principal
            <Header />
        </Divpadre>
    );
};

export default Principal;

const Divpadre = styled.div`
    display: flex;
    flex-direction: row;
    background-color: #000;
    color: #fff;
`;
