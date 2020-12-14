using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace neighborhoodStore.Models
{
    public class ClientItem
    {
        public int ID { get; set; }
        public string LastName { get; set; }
        public string FirstName { get; set; }
        public int PhoneNumber { get; set; }
        public string Email { get; set; }
        public string Address { get; set; }
        public string City { get; set; }
        public DateTime PurchaseDate { get; set; }

        public virtual ICollection<PurchaseItem> PurchaseItems { get; set; }
    }
}
