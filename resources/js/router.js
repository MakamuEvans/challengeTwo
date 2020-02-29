import SupplierList from "./components/Suppliers/SupplierList";
import NewSupplier from "./components/Suppliers/NewSupplier";
import EditSupplier from "./components/Suppliers/EditSupplier";
import ProductList from "./components/Products/ProductList";
import NewProduct from "./components/Products/NewProduct";
import EditProduct from "./components/Products/EditProduct";
import OrderList from "./components/Orders/OrderList";
import NewOrder from "./components/Orders/NewOrder";
import EditOrder from "./components/Orders/EditOrder";
import ProductSupplierList from "./components/ProductSupplier/ProductSupplierList";
import NewProductSupplier from "./components/ProductSupplier/NewProductSupplier";
export const routes = [
    {path: "/", name: 'suppliers', props: true, component: SupplierList},
    {path: "/:id/edit/", name: 'edit-supplier', props: true, component: EditSupplier},
    {path: "/add-supplier", name: 'add-supplier', props: true, component: NewSupplier},
    {path: "/products", name: 'products', props: true, component: ProductList},
    {path: "/add-product", name: 'add-product', props: true, component: NewProduct},
    {path: "/product/:id/edit", name: 'edit-product', props: true, component: EditProduct},
    {path: "/orders", name: 'orders', props: true, component: OrderList},
    {path: "/order", name: 'order', props: true, component: NewOrder},
    {path: "/order/:id/edit", name: 'edit-order', props: true, component: EditOrder},
    {path: "/product-suppliers", name: 'product-suppliers', props: true, component: ProductSupplierList},
    {path: "/add-product-supplier", name: 'add-product-supplier', props: true, component: NewProductSupplier},
]
