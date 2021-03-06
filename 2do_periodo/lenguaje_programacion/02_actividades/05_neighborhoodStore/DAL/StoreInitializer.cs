using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Data.Entity;
using neighborhoodStore.Models;

namespace neighborhoodStore.DAL
{
    public class StoreInitializer : System.Data.Entity.DropCreateDatabaseIfModelChanges<StoreContext>
    {
        protected override void Seed(StoreContext context)
        {
            var clients = new List<Client>
            {
            new Client{ID = 1, LastName = "Carson", FirstName = "Alexander", PhoneNumber = 321456987, Email = "carson@domain.com", Address = "Cra. 76a #25 25", City = "Medellin", PurchaseDate = DateTime.Parse("2005-09-01")},
            new Client{ID = 2, LastName = "Meredith", FirstName = "Alonso", PhoneNumber = 321456987, Email = "meredith@domain.com", Address = "Av. Universidad de B #80-87 a 80-1", City = "Bogota", PurchaseDate = DateTime.Parse("2002-09-01")},
            new Client{ID = 3, LastName = "Arturo", FirstName = "Anand", PhoneNumber = 321456987, Email = "arturo@domain.com", Address = "Cra. 79 #32a-2 a 32a-146", City = "Cali", PurchaseDate = DateTime.Parse("2003-09-01")},
            new Client{ID = 4, LastName = "Gytis", FirstName = "Barzdukas", PhoneNumber = 321456987, Email = "gytis@domain.com", Address = "Cl. 28 #84a-2 a 84a-58", City = "Medellin", PurchaseDate = DateTime.Parse("2002-09-01")},
            new Client{ID = 5, LastName = "Yan", FirstName = "Li", PhoneNumber = 321456987, Email = "yan@domain.com", Address = "Cl. 27A #80-2 a 80-172", City = "Botoga", PurchaseDate = DateTime.Parse("2002-09-01")},
            new Client{ID = 6, LastName = "Peggy", FirstName = "Justice", PhoneNumber = 321456987, Email = "peggy@domain.com", Address = "Cra. 75 #22-2 a 22-90", City = "Cali", PurchaseDate = DateTime.Parse("2001-09-01")},
            new Client{ID = 7, LastName = "Laura", FirstName = "Norman", PhoneNumber = 321456987, Email = "laura@domain.com", Address = "Cl. 18a #77-53 a 77-1", City = "Medellin", PurchaseDate = DateTime.Parse("2003-09-01")},
            new Client{ID = 8, LastName = "Nino", FirstName = "Olivetto", PhoneNumber = 321456987, Email = "nino@domain.com", Address = "Dg. 79A #5-32 a 5-294", City = "Medellin", PurchaseDate = DateTime.Parse("2005-09-01")}
            };
            
            clients.ForEach(s => context.Clients.Add(s));
            context.SaveChanges();

            var products = new List<Product>
            {
            new Product{ProductID = 1, Name = "Cafe", Brand = "Nescafe", Description = "Envase pequeño de 150 gr", Price = 7000},
            new Product{ProductID = 2, Name = "Coca cola", Brand = "Coca cola", Description = "Presentación familiar 2 1/2", Price = 6000},
            new Product{ProductID = 3, Name = "Yogurt", Brand = "Danone", Description = "Vaso de yogurt personal", Price = 1400},
            new Product{ProductID = 4, Name = "Milo", Brand = "Nestle", Description = "Tarro de 300 gr", Price = 9500},
            new Product{ProductID = 5, Name = "Pepsi", Brand = "Pepsi", Description = "Envase personal de 250 ml", Price = 2000},
            new Product{ProductID = 6, Name = "Chocokrispi", Brand = "Kelloggs", Description = "Caja de 420 gr", Price = 22500},
            new Product{ProductID = 7, Name = "Chocokrispi", Brand = "Kelloggs", Description = "Caja de 420 gr", Price = 22500},
            new Product{ProductID = 8, Name = "Te", Brand = "Lipton", Description = "Caja de 10 bolsitas", Price = 4500}
            };

            products.ForEach(s => context.Products.Add(s));
            context.SaveChanges();

            var purchases = new List<Purchase>
            {
            new Purchase{PurchaseID = 1, ProductID = 1, ClientID = 1, Membership = Membership.A},
            new Purchase{PurchaseID = 2, ProductID = 2, ClientID = 2, Membership = Membership.C},
            new Purchase{PurchaseID = 3, ProductID = 3, ClientID = 3, Membership = Membership.B},
            new Purchase{PurchaseID = 4, ProductID = 4, ClientID = 4, Membership = Membership.B},
            new Purchase{PurchaseID = 5, ProductID = 5, ClientID = 5, Membership = Membership.C},
            new Purchase{PurchaseID = 6, ProductID = 6, ClientID = 6, Membership = Membership.A},
            new Purchase{PurchaseID = 7, ProductID = 7, ClientID = 7, },
            new Purchase{PurchaseID = 8, ProductID = 8, ClientID = 8, }
            };

            purchases.ForEach(s => context.Purchases.Add(s));
            context.SaveChanges();
        }
    }
}