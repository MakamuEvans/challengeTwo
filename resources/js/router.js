import SupplierList from "./components/Suppliers/SupplierList";
import NewSupplier from "./components/Suppliers/NewSupplier";
import ProductList from "./components/Products/ProductList";
import OrderList from "./components/Orders/OrderList";
export const routes = [
    {path: "/", name: 'suppliers', props: true, component: SupplierList},
    {path: "/add-supplier", name: 'add-supplier', props: true, component: NewSupplier},
    {path: "/products", name: 'products', props: true, component: ProductList},
    {path: "/orders", name: 'orders', props: true, component: OrderList},
]
