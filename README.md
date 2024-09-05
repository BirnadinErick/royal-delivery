# kings-proj

### Database Schema

- Customer (id, name, password, email, phone, age)
- Order (id, time, tot_price, eta, customer_id)
- Order_Product (order_id, product_id)
- Order_Cuisine (order_id, cuisine_id)
- Product (id, name, picture_url, price, time_to_prep, variations, category_id, cuisine_id, veg)
- Category (id, name, picture_url, cuisine_id)
- Cuisine (id, name, address)
- Cuisine_Admin (cuisine_id, admin_id)
- Admin (id, name, password, role)
