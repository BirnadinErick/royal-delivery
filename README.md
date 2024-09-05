# royal-delivery

### Database Schema

- Customer (customer_id, user_id, phone, age)
- Order (order_id, time, tot_price, eta, customer_id)
- Order_Product (order_id, product_id)
- Order_Cuisine (order_id, cuisine_id)
- Product (product_id, name, image, price, time_to_prep, variations, category_id, cuisine_id, veg)
- Category (category_id, name, picture_url, cuisine_id)
- Cuisine (cuisine_id, name, address)
- Cuisine_Admin (cuisine_id, admin_id)
- Admin (admin_id, role, user_id)
- User (user_id, name, password)
