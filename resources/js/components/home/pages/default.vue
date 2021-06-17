<template>
    <div>
        <p>Al jaren is De Gouden Draak een begrip als het gaat om de beste afhaalgerechten in 's-Hertogenbosch.</p>
        <p>Graag trakteren we u op authentieke gerechten uit de Cantonese keuken.</p>

        <div>
            <h2>Speciale Studentenaanbieding</h2>
            <h3>Chinese Rijsttafel (2 personen)</h3>
            <p>
                Maak een keuze uit 3 van onderstaande keuzegerechten:
            </p>
            <ul>
                <li>Koe Loe Yuk</li>
                <li>Foe Yong Hai</li>
                <li>Tjap Tjoy</li>
                <li>Garnalen met Gebakken Knoflook</li>
                <li>Babi Pangang</li>
                <li>Kipfilet in Zwarte Bonen saus</li>
            </ul>
            <p>Met witte rijst. (Nasi of bami voor meerprijs mogelijk.)</p>
            <p>
                <strong>Prijs: €21,00</strong>
            </p>
        </div>
    </div>
</template>

<style lang="scss" scoped>
h2 {
    margin: 2.8rem 0 1.5rem;
    text-decoration: underline;
    font-size: 1.6rem;
}

h3 {
    font-size: 2.2rem;
    margin: 1rem 0;
}

ul {
    list-style: none;
    display: grid;
    gap: 1rem 15%;
    grid-template-columns: 1fr 1fr;
    margin: 2rem auto;
    padding: 0;
    width: 70%;

    li {
        justify-self: right;
        display: block;
        text-align: start;
        // width: max-content;

        &:nth-child(even) {
            justify-self: left;
        }
    }
}

p {
    strong {
        font-size: 2rem;
    }
}
</style>