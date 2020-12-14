using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.EntityFrameworkCore;

namespace neighborhoodStore.Models
{
    public class PurchaseContext : DbContext
    {
        public PurchaseContext(DbContextOptions<PurchaseContext> options)
            : base(options)
        {
        }

        public DbSet<PurchaseItem> PurchaseItems { get; set; }
    }
}
