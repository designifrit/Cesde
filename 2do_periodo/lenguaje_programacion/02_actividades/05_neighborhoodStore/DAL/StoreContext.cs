using neighborhoodStore.Models;
using System.Data.Entity;
using System.Data.Entity.ModelConfiguration.Conventions;

namespace neighborhoodStore.DAL
{
    public class StoreContext : DbContext
    {
        public StoreContext() : base("StoreContext")
        {
        }

        public DbSet<Client> Clients { get; set; }
        public DbSet<Purchase> Purchases { get; set; }
        public DbSet<Product> Products { get; set; }

        protected override void OnModelCreating(DbModelBuilder modelBuilder)
        {
            modelBuilder.Conventions.Remove<PluralizingTableNameConvention>();
        }
    }
}