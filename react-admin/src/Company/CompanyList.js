import axios from "axios";
import {useState} from "react";
import {useEffect} from "react";

function CompanyList() {
    const [companies, setCompanies] = useState();

    useEffect(() => {

        const getCompanies = async () => {
            const companies = await fetchCompanies();
            setCompanies(companies);
        }

        getCompanies();
    });

    const fetchCompanies = async () => {
        axios.get(`https://jsonplaceholder.typicode.com/users`)
            .then(result => {
                const persons = result.data;

                console.log(persons);
            })
    }

    return (
        <div className="CompanyList">
            Acme Corp
        </div>
    )
}

export default CompanyList;
