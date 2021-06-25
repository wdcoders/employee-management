import EmployeesIndex from "./components/employees/index";
import EmployeeCreate from "./components/employees/create";
import EmployeeEdit from "./components/employees/edit";

export const routes = [
    { path: "/employees", name: "EmployeesIndex", component: EmployeesIndex },
    {
        path: "/employees/create",
        name: "EmployeeCreate",
        component: EmployeeCreate
    },
    {
        path: "/employees/edit/:id",
        name: "EmployeeEdit",
        component: EmployeeEdit
    }
];
