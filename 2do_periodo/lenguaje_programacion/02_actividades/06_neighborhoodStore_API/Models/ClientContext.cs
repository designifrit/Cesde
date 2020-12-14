using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using neighborhoodStore.Models;
using Microsoft.EntityFrameworkCore;
namespace neighborhoodStore.Models
{
    public class ClientContext : DbContext
    {
        public ClientContext(DbContextOptions<ClientContext> options)
            : base(options)
        {
        }

        public DbSet<ClientItem> ClientItems { get; set; }
    }
}
