import SupplierList from "./components/Suppliers/SupplierList";
import NewSupplier from "./components/Suppliers/NewSupplier";
import ProductList from "./components/Products/ProductList";
import NewProduct from "./components/Products/NewProduct";
import OrderList from "./components/Orders/OrderList";
import NewOrder from "./components/Orders/NewOrder";
import ProductSupplierList from "./components/ProductSupplier/ProductSupplierList";
import NewProductSupplier from "./components/ProductSupplier/NewProductSupplier";
export const routes = [
    {path: "/", name: 'suppliers', props: true, component: SupplierList},
    {path: "/add-supplier", name: 'add-supplier', props: true, component: NewSupplier},
    {path: "/products", name: 'products', props: true, component: ProductList},
    {path: "/add-product", name: 'add-product', props: true, component: NewProduct},
    {path: "/orders", name: 'orders', props: true, component: OrderList},
    {path: "/order", name: 'order', props: true, component: NewOrder},
    {path: "/product-suppliers", name: 'product-suppliers', props: true, component: ProductSupplierList},
    {path: "/add-product-supplier", name: 'add-product-supplier', props: true, component: NewProductSupplier},
]
